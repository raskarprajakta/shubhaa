
# Q5 check arrays are disjoint or not



def are_disjoint(arr1, arr2):
    for i in range(0, len(arr1)):
        for j in range(0, len(arr2)):
            if arr1[i] == arr2[j]:
                return False

    return True


arr1 = [int(arr1_ele) for arr1_ele in input("Enter array elements separated by space: ").strip().split(' ')]
arr2 = [int(arr2_ele) for arr2_ele in input("Enter array elements separated by space: ").strip().split(' ')]

if are_disjoint(arr1, arr2):
    print('Yes, disjoint')
else:
    print('No, not disjoint')