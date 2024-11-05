def xor_string(input_string, key):
    # XOR each character with the key
    return ''.join(f"\\x{ord(char) ^ key:02x}" for char in input_string)

# Define the string and key
input_string = "uguntu{x0r_e4x_e4x}"
key = 0x21

# XOR the string and print the result
xor_result = xor_string(input_string, key)
print("XOR result:", xor_result)
