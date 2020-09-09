# Q2 remove duplicate elements in an array


def remove_duplicates(array):
    final_array = []
    for ele in array :
        if ele not in final_array:
            final_array.append(ele)
    return final_array


array = [int(arr_ele) for arr_ele in input("Enter array elements separated by space: ").strip().split(' ')]
print('array after removing duplicates: ', remove_duplicates(array))

# by using set()
# print('array after removing duplicates: ', list(set(array)))
