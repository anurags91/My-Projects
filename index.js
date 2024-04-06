var result = document.getElementById("result");
function display(number)
{
  
  result.value += number; 
  
}
function calculate()
{
 var final_number = result.value;
 var final_result = eval(final_number);
 result.value = final_result;
}
function clr()
{
    result.value = "";
}
function del()
{
    result.value = result.value.slice(0,-1);
}
function sqrt()
{
  screen.value=Math.sqrt(screen.value,2);
}1515


