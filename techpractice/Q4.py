# Q4  Find sum of elements from given array and find its average

array = [int(arr_ele) for arr_ele in input("Enter array elements separated by space: ").strip().split(' ')]

print('sum: ', sum(array))
print('Average: ', round(sum(array)/len(array), 2))
