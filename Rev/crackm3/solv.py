correct = "password"
mask = [3, 5, 2, 4, 1, 0, 3, 1]

# Calculate the masked password
password = ''.join(chr(ord(correct[i]) + mask[i]) for i in range(len(correct)))
print("The correct password to input is:", password)
