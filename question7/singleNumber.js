function findElement(arr) {
    var ones = 0;
    var twos = 0;
    for (var i = 0; i < arr.length; i++) {
      ones = (ones ^ arr[i]) & ~twos;
      twos = (twos ^ arr[i]) & ~ones;
    }
    console.log(ones);
  }
  findElement([3,3,3,2,2,2,4])
  //it should print 4