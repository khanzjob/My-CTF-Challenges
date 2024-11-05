# NJCTF 2017 Be admin

## 题目详情

* NJCTF 2017 Be admin

## 考点
* padding oracle attack
此题目是关于 padding oracle attack的:
Padding oracle attack 攻击的原理请看[这篇文章](http://www.freebuf.com/articles/database/151167.html)：

先看代码：

```php
$query = "SELECT username, encrypted_pass from users WHERE username='$username'";
    $res = $conn->query($query) or trigger_error($conn->error . "[$query]");
    if ($row = $res->fetch_assoc()) {
        $uname = $row['username'];
        $encrypted_pass = $row["encrypted_pass"];
    }
```
此处存在一个sql注入，用union类型的sql注入，所以 $uname 和 $encrypted_pass 可控
再看 login函数：

```php
function login($encrypted_pass, $pass)
{
    $encrypted_pass = base64_decode($encrypted_pass);
    $iv = substr($encrypted_pass, 0, 16);
    $cipher = substr($encrypted_pass, 16);
    $password = openssl_decrypt($cipher, METHOD, SECRET_KEY, OPENSSL_RAW_DATA, $iv);
    return $password == $pass;
}
```
此处存在一个 php 弱类型, 因为 $encrypted_pass 和 $pass 都可控,我们只需要让 $encrypted_pass解密失败，然后提交一个空密码就可以绕过。

要想获取flag，需要让 `$_SESSION['isadmin'] == true;`成立，
主要通过构造密文，利用下面的函数，让 `$u === 'admin'` 成立。
```php
function test_identity()
{
    if (!isset($_COOKIE["token"]))
        return array();
    if (isset($_SESSION['id'])) {
        $c = base64_decode($_SESSION['id']);
        if ($u = openssl_decrypt($c, METHOD, SECRET_KEY, OPENSSL_RAW_DATA, base64_decode($_COOKIE["token"]))) {
            if ($u === 'admin') {
                $_SESSION['isadmin'] = true;
            } else $_SESSION['isadmin'] = false;
        } else {
            die("ERROR!");
        }
    }
}
```

思路是，先通过 padding oracle 攻击，计算出 `$defaultId`,然后就在知道一组加密结果,即：

```
$ID = openssl_encrypt($defaultId, METHOD, SECRET_KEY, OPENSSL_RAW_DATA, $token)
```
所以：

```
$defaultId = openssl_decrypt($ID, METHOD, SECRET_KEY, OPENSSL_RAW_DATA, $token)
```
设 $ID 进行 aes解密之后的中间值为 $midText
则 `$defaultId = $midText^$token`

所以伪造一个`token = $token ^ $defaultId ^ 'admin\x0b\x0b\x0b\x0b\x0b\x0b\x0b\x0b\x0b\x0b\x0b'`
解密之后，就可以使得 $u = 'admin'

## 启动
* docker-compose up -d
* open http://127.0.0.1:8085



## 版权
该题目复现环境尚未取得主办方及出题人相关授权，如果侵权，请联系本人删除（ cocolizdf@gmail.com）







