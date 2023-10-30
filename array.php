<?php
include 'top.php';
?>
<body>
    <section>
            <h3>Which states have the most eco-friendly lawns?</h3>
            <p> While eco-friendly lawns are growing in popularity throughout the United States, there are several pioneer ststaes who have shwon the rest of the 
                country how its done. Many states are implementing strict regulations and promoting sustainable lawn care practices to protect the environment. Homeowners 
                and buisnesses alike are actively seeking ways to reduce their own carbon footprint and minimize the use of harmful
                chemicals on their lawns. These eco-conscious practices not only benefit the environment but also create healthier and safer spaces for people to enjoy.</p>
            <p>Among the states with the most eco-friendly lawns are, California, Oregon, Vermont, Washington, and New York. These states have implemented progressive 
                policies, and residents are embracing organic lawn care methods and alternative lawns.</p>
</section>
<section>
                <?php
                $states= array(
                    ["California", "Oregon", "Vermont", "Washington", "New York"],
                    ["Colorado", "Hawaii", "Conneticut", "Rhode Island", "Maine"],
                    ["Minnesota", "Maryland", "Massachusetts", "New Jersey", "Wisconsin"]
                );
                $winner = "California";
               
                echo "<table>";
                $numStates = 0;
                foreach($states as $row){
                   echo '<tr>';
                   foreach($row as $state){
                    echo "<td>$state</td>";
                    $numStates++;
                    if ($count % 5 ==0){
                        echo '</tr><tr>';
                    }
                   }
                     echo '</tr>'  ;
                    }
                echo "</ul>";
       

                echo "<h2> The winner of the Most Eco-Friendly Lawn State:</h2>";
                echo "<p>Out of $numStates states in the competition, the state with the most eco-friendly lawns is $winner . Congratulations to California for leading the country in sustainble lawn care!</p>";
            ?>
            </section>
            <section>
                <p>For more information on sustainable lawns and lawn alternatives, please visit :</p>
                <p>
                <a href="https://chatham.ces.ncsu.edu/wp-content/uploads/2019/04/Sustainable-Lawns-and-Lawn-Alternatives-EG-2019-short.pdf?fwd=no" target="_blank">
                    Sustainable Lawns (PDF)
                </a>
                Source: Chatham County Center, North Carolina State Univerasity Cooperative Extension
                </p>
                </section>
            </body>
            <?php
            include 'footer.php';
            ?>
    

                