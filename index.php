<?php
 include_once 'header.php'; 
 ?>
    <div class="sidebar" style = "  float: right; width: 30%; height: 70%; background-color:#000333; padding: 20px;">
    <?php
            if (isset($_SESSION["useruid"])){
           echo "<p>Hello there " . $_SESSION["useruid"] . "</p>" ;
             }
    ?>
    <ul >  
        <li style =list-style-type: none;><a href=" Club Captains through the years">Club Captains through the years</a></li>
        <li style =list-style-type: none;><a href=" Club Academy">Club Academy</a></li>
         <li style =list-style-type: none;><a href="The Spurs Foundation">The Spurs Foundation</a></li>
    </ul> 

    </div>
    <article style = " height:100%; width:100%;  background-color: rgb(35, 35, 165); color: papayawhip;">
   <h2>Club History</h2>
    <p>Tottenham Hotspur Football Club is a football club based in Tottenham, north London, England. Formed in 1882 as "Hotspur Football Club" by a group of schoolboys, it was renamed to "Tottenham Hotspur Football Club" in 1884, and is commonly referred to as "Tottenham" or "Spurs". Initially amateur, the club turned professional in 1895. Spurs won the FA Cup in 1901, becoming the first, and so far only non-League club to do so since the formation of the Football League. The club has won the FA Cup a further seven times, the Football League twice, the League Cup four times, the UEFA Cup twice and the UEFA Cup Winners' Cup in 1963, the first UEFA competition won by an English team. In 1960–61, Tottenham became the first team to complete The Double in the 20th century.

        Tottenham played in the Southern League from 1896 until 1908, when they were elected to the Football League Second Division. They won promotion to the First Division the following year, and stayed there until the late 1920s. The club played mostly in the Second Division until the 1950s, when it enjoyed a revival, reaching a peak in the 1960s. Fortunes dipped after the early 1970s, but resurged in the 1980s. Tottenham was a founding member of the Premier League in 1992; they finished in mid-table most seasons, but now rank as one of the top six clubs.
        
        Of the club's thirty-two managers, John Cameron was the first to win a major trophy, the 1901 FA Cup. Peter McWilliam added a second FA Cup win for the club in 1921. Arthur Rowe developed the "push and run" style of play in the 1950s and led the club to its first league title. Bill Nicholson oversaw the Double winning side as well as the most successful period of the club's history, in the 1960s and early 1970s. Later managers include Keith Burkinshaw, the second most successful in terms of major trophies won, with two FA Cups and a UEFA Cup, and Terry Venables, under whom the club won the FA Cup in 1991.
        
        Spurs played their early games on public land at Tottenham Marshes, but by 1888 they were playing on rented ground at Northumberland Park. In 1899, the club moved to White Hart Lane, where a stadium was gradually developed. Spurs remained there until 2017. Its replacement, Tottenham Hotspur Stadium, was completed in 2019 on the same site; during its construction, home matches were played at Wembley Stadium.
        
    </p>
    <h2>Club Achievements</h2>
       <ol> <li>Football League Champions: 1950/1951, 1960/1961</li>
        <li>The FA Cup Winners: 1900/1901, 1920/1921, 1960/1961, 1961/1962, 1966/1967, 1980/1981, 1981/1982, 1990/1991</li>
        <li>  Football League Cup Winners: 1970/1971, 1972/1973, 1998/1999, 2007/2008</li>
        <li>  European Cup-Winners Cup Winners: 1962/1963</li>
        <li>  UEFA Cup Winners: 1971/1972, 1983/1984</li>
        <li>   Football League Division Two Champions: 1919/1920, 1949/1950</li>
        <li>   FA Charity Shield Winners: 1920/1921, 1951/1952, 1961/1962, 1962/1963, 1967/1968 (joint), 1981/1982 (joint), 1991/1992 (joint)</li>
     </ol>
    </article> 
    <footer style = " background-color: rgb(17, 17, 50);   color: papayawhip; ; padding: 50px; text-align: center;">
    copyright 2023 . All rights reserved </footer>
