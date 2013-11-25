<!-- this is a form, and the action tells it where to store the data.  The post method tells it to post. -->

<form action="post.php" method="post">
    <select name="proceed">
        <option value="0">No</option>
        <option value="1">Yes</option>
    </select>
    <br />
    
    <input type="checkbox" name="params[]" value="Ben" /> Param 1
    <br />
      
    <input type="checkbox" name="params[]" value="Bob" /> Param 2
    <br />
      
    <input type="checkbox" name="params[]"  value="Bill"/> Param 3
    <br />
      
    <input type="submit" />
</form>

