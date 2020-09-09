# Q1 Display the given array in reverse order

array = []
n = int(input("enter no of elements: "))

for i in range(0, n):
    ele = input("element: ")
    array.append(ele)


# by using  reverse() method in python
# array.reverse()
# print('reversed_array: ', array)


# by using slicing
# reversed_array = array[::-1]
# print('reversed_array: ', reversed_array)

# using for loop
n = len(array)
reversed_array = []
for i in range(0, n):
    reversed_array.append(array[n-i-1])
print('reversed_array: ', reversed_array)







