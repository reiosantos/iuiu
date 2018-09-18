function removeDuplicates(string) {
    let result = '';
    let hasDuplicates = false;
   
     const arr = string.split(' ');
     for (let i = 0; i < arr.length - 1; i++) {
       const currentWord = arr[i];
       const nextWord = arr[i + 1];
       if (currentWord === nextWord) {
        result += nextWord + ' ';
        hasDuplicates = true;
        ++i;
        continue;
       }
   
       result += currentWord + ' ';
     }
     result += arr[arr.length - 1];
    return hasDuplicates ? removeDuplicates(result) : result;
   }
   console.log(removeDuplicates('This boy boy boy is is going to to school school.'))