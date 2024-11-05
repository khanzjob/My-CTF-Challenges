def decode_xor(encoded_hex, key):
    # Split the encoded hex string and remove the \x prefix
    hex_values = encoded_hex.split('\\x')[1:]  # Skip the first empty element
    # Decode each hex value by XORing with the key and converting to a character
    decoded_chars = [chr(int(hex_val, 16) ^ key) for hex_val in hex_values]
    return ''.join(decoded_chars)

# Encoded hex string and XOR key
encoded_hex = "\\x54\\x46\\x54\\x4f\\x55\\x54\\x5a\\x59\\x11\\x53\\x7e\\x44\\x15\\x59\\x7e\\x44\\x15\\x59\\x5c"
key = 0x21

# Decode the string
decoded_string = decode_xor(encoded_hex, key)
print("Decoded string:", decoded_string)
