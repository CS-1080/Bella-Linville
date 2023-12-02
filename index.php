<?php
include 'top.php';
?>

        <figure>
        <img class="rounded" alt="Example of a no mow lawn alternative!" src="images/no-mow-lawn.png">
        <figcaption> Instead of installing turf or nonnative grass species, planting native shrubs provides habitats local fauna and provides erosion control!</figcaption>
</figure>
<main>
    <div id="container">
        <div>
    <section>
        <h2>The Danger of Traditional Lawns</h2>
        <p class="border">You see them everywhere sprawled throughout suburbs. Dads proudly mow them every week, their pride and joy. Lawns full of green grass may look tidy and neat, but what if I told you
            they weren't so green? While upkept lawns have become a staple of suburban America, they may be harming local ecosystems. Their upkeep comes with a high carbon cost, and burns holes in the pockets of homeowners. 
            Maintaining a lawn requires an unsustainable amount of water, a resource many of which don't even have readily available access to. 
            The fertilizers, pesticides, and weedkillers needed to upkeep a respectable lawn can have dire indirect effects on surrounding ecosystems such as eutrification, chemical contamination, and unintentional herbicide or pesticide. 
            Furthermore, traditional lawns diminish local biodiversity. Lawns effectively displace local fuana by destroying their habitats. Overall this decreases the stability of local ecosystems, as biodiversity is a key factorn to the resilience and wellbeing of environs.</p>
</section>
</div>
</div>
<section>
    <h2>Statistics on the Impact of Grass Lawns</h2>
    <p class="paragraph">The metrics of this data are reffering to a standard sized lawn, which is roughly 500 square feet!</p>
    <table class="table">
        <caption>Big Names in Sustainable Lawn Care and Permaculture</caption>
        <tr>
            <th>Pioneers of Permaculture</th>
            <th>Publishments</th>
            <th>Impact</th>
</tr>
<?php
$sql = 'SELECT fldPioneers, fldPublishments, fldImpacts from tblBigNames';
$statement = $pdo->prepare($sql);
$statement->execute();

$records = $statement->fetchAll();

foreach($records as $record){
    print '<tr>';
    print '<td>' . $record['fldPioneers'] . '</td>';
    print '<td>' . $record['fldPublishments'] . '</td>';
    print '<td>' . $record['fldImpacts'] . '</td>';
    print '</tr>' . PHP_EOL;
    }
    ?>
<tr>
    <td colspan="3"><a class="link" href="https://thecarrotrevolution.com/history-of-permaculture/">Sources</a></td>
</tr>
</table>
</section>

<section>
    <h2>Alternatives to Grass Lawns</h2>
    <p><strong>Dont fret!</strong> Grass lawns are not your only option for having an aesthetic lawn. There are many diiferent options that involve native shrubery, trees, rocks, and more!!</p>
    <h3>Some alternatives are:</h3>
    <ol>
        <li>Moss Lawns
            <ul>
                <li>Moss lawns are extremely resilient to drought, disease, and pests. There's a vast amount of moss varieties to chose from, and they're all low matienence! That's right, no more mowing! However, mosses love shade, so if you have a sunny lawn this many not be the option for you.</li>
</ul>
</li>
<li>Clover Lawns
    <ul>
        <li>Clover lawns are another inexpensive, low matienence lawn option. It spreads quickly, so it's perfect for larger lawns. However, this may pose an issue with spreading into your neighbors lawn so this lawn may require installing an impermeable border around your yard.</li>
</ul>
</li>
<li>Flower and Shrub Beds 
    <ul>
        <li>Flower beds and shrub beds are a beautiful choice for lawn alternatives. This style lawn provides ample habitats for pollinators, as well as provides erosion control due to the deep string root systems of shrubs. If you live somewhere that's prone to droughts, succulents may be a better option than flowers. This option is a bit more expensive than the previous alternative lawns, but if you have the resources for it makes for a beautiful ecofriendly lawn.</li>
</ul>
</li>
</ol>
<p>Overall, there are many ecofriendly and aesthetic alternatives to boring, unsustainable lawns. This webpage only touches on a few of the many great options!</p>
</section>
</div>
</main>
</main>
<?php
include 'footer.php';
?>
</html>






