# Q3 find second max element in an array


array = [int(arr_ele) for arr_ele in input("Enter array elements separated by space: ").strip().split(' ')]
array.sort()
print("second largest element is : ", array[-2])
