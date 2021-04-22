<script>
var foods =  ['a','b','c',2,5,'a','b'];

//20. forEach

foods.forEach((e)=>{
	document.write(e);
})

//19. Slice
document.write(foods.slice(1,3));

//18. Splice
var array = [1,2,4,5];
array.splice(2, 0, 11); //insert 11 at index 2 op => [1,2,11,4,5]
array.splice(2, 1, 30);	//remove 1 item from index 2 and insert 30  // [1, 2, 30, 4, 5]

//17. Map

var numbers = [1,2,3,4,5];
	function double(num) {
   return num * num;
}
var doubledNumbers = numbers.map(double) 
document.write(doubledNumbers);
 
//2. lastIndexOf First last index of a given element in the Array, if it is not present, it returns -1.
var qaz = foods.lastIndexOf('b'),zaq = foods.lastIndexOf('d');
//3. Length
var len = foods.length;
//4. Push Add an element to the end of an Array.
foods.push('d');
var numbers = [1,2,3,4,5],num2 = [6,7,8,9,10];
numbers.push(...num2);
//5. Unshift  Add an element to the beginning of an Array.
foods.unshift('jaikumar');
//6. Pop Removes the last element of the array.
foods.pop();
//7. Shift Remove the first element of the array.
foods.shift();
//8. Join Joins the elements of Array to String.
var joinedFood = foods.join('-');
//9. Concat
var array = [1,2,3,4,5];
var newArray =  array.concat(1,2,3, [12,12,34], undefined, null);
newArray; // [1, 2, 3, 4, 5, 1, 2, 3, 12, 12, 34, undefined, null]

//10. Reverse
foods.reverse();

//12. Some
var num = [1,2,3,4,10, 12];
num.some(n => n > 10); // true
num.some(n => n > 100); // false
//13. Every
num.every(n => n > 10); // false
num.every(n => n > 0); // true

//14. Sort Sort the elements of the array. By default, it sorts based on char code. We can also pass our sort function.
var arr = ['b', 'c', 'd', 'e' , 'a'];
arr.sort(); // ["b", "c", "d", "e"]
var arr = [5, 11,1,2,3,4];
arr.sort( (a, b) => a-b ); // [1, 2, 3, 4, 5, 11]
var arr = [1,2,4,1,2,3];
arr.sort( () => Math.random() - 0.5);

//15. Reduce The reduce() method executes a reducer function (which you provide) on each element of the array

var arr = [1,2,3,4,5];
var result = 0;
function add(res, currentNum) {
   return res + currentNum;

}
arr.reduce(add, result);



document.write(joinedFood);
document.write(foods+','+qaz+','+zaq+','+len+','+numbers);
</script>