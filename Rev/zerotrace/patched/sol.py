def number_sequence(n):
    array = [0] * n
    for i in range(1, n):
        curr = array[i - 1] - i
        for j in range(i):
            if (array[j] == curr) or (curr < 0):
                curr = array[i - 1] + i
                break
        array[i] = curr
    return array

# Generate the sequence
arr = number_sequence(4000)

# Retrieve values
a = arr[383]
b = arr[166]
c = arr[389]
d = arr[373]

# Convert values to characters
def int_to_char(value):
    return chr(value)

password_chars = [int_to_char(a), int_to_char(b), int_to_char(c), int_to_char(d)]
password = ''.join(password_chars)

# Construct the flag
flag = f"rooters{{{password}}}ctf"
print(flag)
