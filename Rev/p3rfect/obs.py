import pprint
import argparse

'''
Decode a list of integers into a string
'''
def decode(integer_list):
    string = []
    for integer in integer_list:
        while integer:
            string.append(chr(integer % 255))
            integer = integer // 255  # This is equivalent to integer = integer // 255
    return ''.join(string)

'''
Encode a string into n-byte integers
'''
def encode(string, n):
    def divide_chunks(l, n):
        for i in range(0, len(l), n):
            yield l[i:i + n] 

    total = []
    for chunk in divide_chunks(string, n):
        integer = 0
        for idx, val in enumerate(chunk):
            integer += (ord(val) * 255**idx)
        total.append(integer)
    return total

def parse_arguments():
    parser = argparse.ArgumentParser(description='String/integer encoding/decoding.')
    group = parser.add_mutually_exclusive_group()
    group.add_argument('--string', type=str, help='string to be encoded')
    group.add_argument('--list', type=str, help='list to be decoded (comma-separated integers)')
    parser.add_argument('--bytes', type=int, default=4, help='width in bytes of your integer')
    return parser.parse_args()

if __name__ == '__main__':
    args = parse_arguments()

    if args.string:
        enc_list = encode(args.string, args.bytes)
        print(f"Encoded: {enc_list}")
    elif args.list:
        int_list = list(map(int, args.list.split(',')))  # Parse the comma-separated string to a list of integers
        dec_str = decode(int_list)
        print(f"Decoded: {dec_str}")
