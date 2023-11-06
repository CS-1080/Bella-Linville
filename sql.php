<?php
include 'top.php';
?>
<main>
    <p>Create Table SQL</p>

    <pre>
        CREATE TABLE tblBigNames(
            pmkBigNamesId INT AUTO_INCREMENT PRIMARY KEY,
            fldPioneers VARCHAR(40),
            fldOrganizations VARCHAR(200),
            fldImpacts VARCHAR(200)
        )
        INSERT INTO tblBigNames 
  (fldPioneers, fldPublishments, fldImpacts)
    VALUES
  ('Bill Mollinson', 'wrote "Permaculture: A Designers Manual"', 'An ecologist from Australia considered one of the founding fathers of permaculture and sustainable design. Mollinson considered permaculture to be guided by three ethics: care of Earth + care of people + fair share.')
  ('David Holmgren', 'wrote "Permaculture: Principals and Pathways Beyond Sustainibility"', 'Another ecologist from Australia and the co-pioneer of permaculture. Holmgrens work entails laying out a system for us to live and thrive within natures means.')
  ('Toby Hemmingway', 'wrote "Gias Garden"', 'Wrote byfar the most popular book regarding permaculture and sustainable lawn care. Hemmingway utilizes ecology, biology, soil sciences, and chemistry to best help the reader understand the micro-ecosystem within their lawns')
  ('Masanobu Fukuoka', 'wrote "The One Straw Revolution"', 'Famous for his quote "if we throw mother nature out the door she comes back with a pitchfork". While Fukuokas primary focus in permaculture lies within sustainable agriculture the principles he has decidated his lifes work to can easily be transferred to sustainable lawn care.')
        </pre>
        </main>
        <?php
        include 'footer.php';
        ?>
        </body>
        </html>