$query = 'SELECT users.username, users.userid, posts.userid
FROM users, posts
WHERE users.userid = posts.userid';

$result = mysql_query($query) or die(mysql_error());


while($row = mysql_fetch_array($result)){
    echo $row['username'];
    echo "<br />";
}