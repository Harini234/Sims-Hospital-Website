<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=div, initial-scale=1.0">
    <title>My Symptom Treatment</title>
    <style>
        .logo5
        {
            width:100px;
            height:100px;
            position:absolute;
            left: 50%;
            margin-top: 30px;
            transform:translateX(-50%);
        }
        .logo5 img
        {
           width:100%;
        }
        body{
            background:url('https://img.freepik.com/free-vector/gradient-blue-dynamic-lines-background_52683-67204.jpg?w=2000')no-repeat center center/cover;

        }
        table,th,td{
            border:2px solid black;
            width:1100px;
            background-color: papayawhip;
            margin-top: 30px;
            text-align: center;
        }
        .btn6{
            width:10%;
            height:5%;
            font-size:22px;
            padding:0px;
        }
        input[type=text],select
        {
            margin-top: 100px;
        }
        .btn7{
            width:10%;
            height:5%;
            font-size:22px;
            padding:0px;
        }

    </style>
</head>
<body>
<section>
    <div class="logo5">
        <img src="SIMS-Logo.png" alt="sims">   
    </div>
</section>
    <div class="container" style="text-align: center;">
        <form action="" method="POST">
            <select class="btn6" name="Symptom1">
            <option value="Select Symptom">Select Symptom</option>
            <option value="in joints"<?php if(isset($_POST['Symptom1']) && $_POST['Symptom1']=='in joints') echo "selected='selected'";?>>in joints</option>
            <option value="Fatigue"<?php if(isset($_POST['Symptom1']) && $_POST['Symptom1']=='Fatigue') echo "selected='selected'";?>>Fatigue</option>
            <option value="Swollen lymph glands"<?php if(isset($_POST['Symptom1']) && $_POST['Symptom1']=='Swollen lymph glands') echo "selected='selected'";?>>Swollen lymph glands</option>
            <option value="Memory loss"<?php if(isset($_POST['Symptom1']) && $_POST['Symptom1']=='Memory loss') echo "selected='selected'";?>>Memory loss</option>
            <option value="Itching"<?php if(isset($_POST['Symptom1']) && $_POST['Symptom1']=='Itching') echo "selected='selected'";?>>Itching</option>
            <option value="Dark urine"<?php if(isset($_POST['Symptom1']) && $_POST['Symptom1']=='Dark urine') echo "selected='selected'";?>>Dark urine</option>
            <option value="post-nasal"<?php if(isset($_POST['Symptom1']) && $_POST['Symptom1']=='post-nasal') echo "selected='selected'";?>>post-nasal</option>
            <option value="frequent headaches"<?php if(isset($_POST['Symptom1']) && $_POST['Symptom1']=='frequent headaches') echo "selected='selected'";?>>frequent headaches</option>
            <option value="Redness in breast"<?php if(isset($_POST['Symptom1']) && $_POST['Symptom1']=='Redness in breast') echo "selected='selected'";?>>Redness in breast</option>
            <option value="Rapid heart rate"<?php if(isset($_POST['Symptom1']) && $_POST['Symptom1']=='Rapid heart rate') echo "selected='selected'";?>>Rapid heart rate</option>
            <option value="red spots"<?php if(isset($_POST['Symptom1']) && $_POST['Symptom1']=='red spots') echo "selected='selected'";?>>red spots</option>
            <option value="chest pain"<?php if(isset($_POST['Symptom1']) && $_POST['Symptom1']=='chest pain') echo "selected='selected'";?>>chest pain</option>
            <option value="skin rash"<?php if(isset($_POST['Symptom1']) && $_POST['Symptom1']=='skin rash') echo "selected='selected'";?>>skin rash</option>
            <option value="sore throat"<?php if(isset($_POST['Symptom1']) && $_POST['Symptom1']=='sore throat') echo "selected='selected'";?>>sore throat</option>
            <option value="sneezing"<?php if(isset($_POST['Symptom1']) && $_POST['Symptom1']=='sneezing') echo "selected='selected'";?>>sneezing</option>
            <option value="vomiting"<?php if(isset($_POST['Symptom1']) && $_POST['Symptom1']=='vomiting') echo "selected='selected'";?>>vomiting</option>
            <option value="tiredness"<?php if(isset($_POST['Symptom1']) && $_POST['Symptom1']=='tiredness') echo "selected='selected'";?>>tiredness</option>
            <option value="Abdominal cramps"<?php if(isset($_POST['Symptom1']) && $_POST['Symptom1']=='Abdominal cramps') echo "selected='selected'";?>>Abdominal cramps</option>
            <option value="unexplained hemorrhaging"<?php if(isset($_POST['Symptom1']) && $_POST['Symptom1']=='unexplained hemorrhaging') echo "selected='selected'";?>>unexplained hemorrhaging</option>
            <option value="Muscle"<?php if(isset($_POST['Symptom1']) && $_POST['Symptom1']=='Muscle') echo "selected='selected'";?>>Muscle</option>
            <option value="Fatigue, weakness"<?php if(isset($_POST['Symptom1']) && $_POST['Symptom1']=='Fatigue, weakness') echo "selected='selected'";?>>Fatigue, weakness</option>
            <option value="Nausea, vomiting or both"<?php if(isset($_POST['Symptom1']) && $_POST['Symptom1']=='Nausea, vomiting or both') echo "selected='selected'";?>>Nausea, vomiting or both</option>
            <option value="red or pink spotty rash"<?php if(isset($_POST['Symptom1']) && $_POST['Symptom1']=='red or pink spotty rash') echo "selected='selected'";?>>red or pink spotty rash</option>
            <option value="Dehydration"<?php if(isset($_POST['Symptom1']) && $_POST['Symptom1']=='Dehydration') echo "selected='selected'";?>>Dehydration</option>
            <option value="muscle tightness"<?php if(isset($_POST['Symptom1']) && $_POST['Symptom1']=='muscle tightness') echo "selected='selected'";?>>muscle tightness</option>
            <option value="anal itching"<?php if(isset($_POST['Symptom1']) && $_POST['Symptom1']=='anal itching') echo "selected='selected'";?>>anal itching</option>
            <option value="fits or seizures"<?php if(isset($_POST['Symptom1']) && $_POST['Symptom1']=='fits or seizures') echo "selected='selected'";?>>fits or seizures</option>
            <option value="Sore throat"<?php if(isset($_POST['Symptom1']) && $_POST['Symptom1']=='Sore throat') echo "selected='selected'";?>>Sore throat</option>
            <option value="Abdominal pain"<?php if(isset($_POST['Symptom1']) && $_POST['Symptom1']=='Abdominal pain') echo "selected='selected'";?>>Abdominal pain</option>
            <option value="Bleeding"<?php if(isset($_POST['Symptom1']) && $_POST['Symptom1']=='Bleeding') echo "selected='selected'";?>>Bleeding</option>
            <option value="a yellow tinge to the skin "<?php if(isset($_POST['Symptom1']) && $_POST['Symptom1']=='a yellow tinge to the skin') echo "selected='selected'";?>>a yellow tinge to the skin</option>
            <option value="pneumonia"<?php if(isset($_POST['Symptom1']) && $_POST['Symptom1']=='pneumonia') echo "selected='selected'";?>>pneumonia</option>
            <option value="Discolored patches of skin"<?php if(isset($_POST['Symptom1']) && $_POST['Symptom1']=='Discolored patches of skin') echo "selected='selected'";?>>Discolored patches of skin</option>
            <option value="pain in abdomen or muscles"<?php if(isset($_POST['Symptom1']) && $_POST['Symptom1']=='pain in abdomen or muscles') echo "selected='selected'";?>>pain in abdomen or muscles</option>
            <option value="vomiting"<?php if(isset($_POST['Symptom1']) && $_POST['Symptom1']=='vomiting') echo "selected='selected'";?>>vomiting</option>
            <option value="itching sensation from bite"<?php if(isset($_POST['Symptom1']) && $_POST['Symptom1']=='itching sensation from bite') echo "selected='selected'";?>>itching sensation from bite</option>
            <option value="can be chronic or with blood "<?php if(isset($_POST['Symptom1']) && $_POST['Symptom1']=='can be chronic or with blood') echo "selected='selected'";?>>can be chronic or with blood</option>
            <option value="Stomach pain"<?php if(isset($_POST['Symptom1']) && $_POST['Symptom1']=='Stomach pain') echo "selected='selected'";?>>Stomach pain</option>
            <option value="Weight gain"<?php if(isset($_POST['Symptom1']) && $_POST['Symptom1']=='Weight gain') echo "selected='selected'";?>>Weight gain</option>
            <option value="fever"<?php if(isset($_POST['Symptom1']) && $_POST['Symptom1']=='fever') echo "selected='selected'";?>>fever</option>
            <option value="pregnancy"<?php if(isset($_POST['Symptom1']) && $_POST['Symptom1']=='pregnancy') echo "selected='selected'";?>>pregnancy</option>
            </select>
            <input type="submit" name="search" class="btn6" value="Search">
        </form>
        <table align="center">
            <tr>
                <th>Srno</th>
                <th>Ailment</th>
                <th>Symptom1</th>
                <th>Symptom2</th>
                <th>Symptom3</th>
                <th>Treatment1</th>
                <th>Treatment2</th>
                <th>Treatment3</th>
            </tr><br>

            <?php

            error_reporting(0);
            $connection = mysqli_connect("localhost","root","");
            $db = mysqli_select_db($connection,'symptoms');
            
            if(isset($_POST['search']))
            {
                $Symptom1 = $_POST['Symptom1'];
                $query= "SELECT * FROM `treatment_database` where Symptom1='$Symptom1'";
                $query_run = mysqli_query($connection,$query);
                while($row = mysqli_fetch_array($query_run))
                {
                    ?>
                    <tr>
                        <td> <?php echo $row['Srno']; ?> </td>
                        <td> <?php echo $row['Ailment']; ?> </td>
                        <td> <?php echo $row['Symptom1']; ?> </td>
                        <td> <?php echo $row['Symptom2']; ?> </td>
                        <td> <?php echo $row['Symptom3']; ?> </td>
                        <td> <?php echo $row['Treatment1']; ?> </td>
                        <td> <?php echo $row['Treatment2']; ?> </td>
                        <td> <?php echo $row['Treatment3']; ?> </td>
                    </tr>

                    <?php
                }
            }

            ?>
        </table>
    </div>
    <center>
    <div class="container">
        <form action="" method="POST">
        <select class="btn7" name="Ailment">
            <option value="Select Ailment">Select Ailment</option>
            <option value="Arthritis"<?php if(isset($_POST['Ailment']) && $_POST['Ailment']=='Arthritis') echo "selected='selected'";?>>Arthritis</option>
            <option value="Anemia"<?php if(isset($_POST['Ailment']) && $_POST['Ailment']=='Anemia') echo "selected='selected'";?>>Anemia</option>
            <option value="AIDS"<?php if(isset($_POST['Ailment']) && $_POST['Ailment']=='AIDS') echo "selected='selected'";?>>AIDS</option>
            <option value="Alzheimer"<?php if(isset($_POST['Ailment']) && $_POST['Ailment']=='Alzheimer') echo "selected='selected'";?>>Alzheimer</option>
            <option value="Allergies"<?php if(isset($_POST['Ailment']) && $_POST['Ailment']=='Allergies') echo "selected='selected'";?>>Allergies</option>
            <option value="Babesia infection"<?php if(isset($_POST['Ailment']) && $_POST['Ailment']=='Babesia infection') echo "selected='selected'";?>>Babesia infection</option>
            <option value="Bronchitis"<?php if(isset($_POST['Ailment']) && $_POST['Ailment']=='Bronchitis') echo "selected='selected'";?>>Bronchitis</option>
            <option value="Brain tumor"<?php if(isset($_POST['Ailment']) && $_POST['Ailment']=='Brain tumor') echo "selected='selected'";?>>Brain tumor</option>
            <option value="Breast Cancer"<?php if(isset($_POST['Ailment']) && $_POST['Ailment']=='Breast Cancer') echo "selected='selected'";?>>Breast Cancer</option>
            <option value="Cholera"<?php if(isset($_POST['Ailment']) && $_POST['Ailment']=='Cholera') echo "selected='selected'";?>>Cholera</option>
            <option value="Chickenpox"<?php if(isset($_POST['Ailment']) && $_POST['Ailment']=='Chickenpox') echo "selected='selected'";?>>Chickenpox</option>
            <option value="Cardiovascular"<?php if(isset($_POST['Ailment']) && $_POST['Ailment']=='Cardiovascular') echo "selected='selected'";?>>Cardiovascular</option>
            <option value="Coccidiodomycosis"<?php if(isset($_POST['Ailment']) && $_POST['Ailment']=='Coccidiodomycosis') echo "selected='selected'";?>>Coccidiodomycosis</option>
            <option value="Coronavirus"<?php if(isset($_POST['Ailment']) && $_POST['Ailment']=='Coronavirus') echo "selected='selected'";?>>Coronavirus</option>
            <option value="Cold and Cough"<?php if(isset($_POST['Ailment']) && $_POST['Ailment']=='Cold and Cough') echo "selected='selected'";?>>Cold and Cough</option>
            <option value="Dengue Fever"<?php if(isset($_POST['Ailment']) && $_POST['Ailment']=='Dengue Fever') echo "selected='selected'";?>>Dengue Fever</option>
            <option value="Diphtheria"<?php if(isset($_POST['Ailment']) && $_POST['Ailment']=='Diphtheria') echo "selected='selected'";?>>Diphtheria</option>
            <option value="E.coli Infections"<?php if(isset($_POST['Ailment']) && $_POST['Ailment']=='E.coli Infections') echo "selected='selected'";?>>E.coli Infections</option>
            <option value="Ebola Virus"<?php if(isset($_POST['Ailment']) && $_POST['Ailment']=='Ebola Virus') echo "selected='selected'";?>>Ebola Virus</option>
            <option value="Ehrlichiosis"<?php if(isset($_POST['Ailment']) && $_POST['Ailment']=='Ehrlichiosis') echo "selected='selected'";?>>Ehrlichiosis</option>
            <option value="Flu"<?php if(isset($_POST['Ailment']) && $_POST['Ailment']=='Flu') echo "selected='selected'";?>>Flu</option>
            <option value="Gastroenteritis"<?php if(isset($_POST['Ailment']) && $_POST['Ailment']=='Gastroenteritis') echo "selected='selected'";?>>Gastroenteritis</option>
            <option value="German Measles"<?php if(isset($_POST['Ailment']) && $_POST['Ailment']=='German Measles') echo "selected='selected'";?>>German Measles</option>
            <option value="Giardia Infection"<?php if(isset($_POST['Ailment']) && $_POST['Ailment']=='Giardia Infection') echo "selected='selected'";?>>Giardia Infection</option>
            <option value="Glanders"<?php if(isset($_POST['Ailment']) && $_POST['Ailment']=='Glanders') echo "selected='selected'";?>>Glanders</option>
            <option value="Gonorrhea"<?php if(isset($_POST['Ailment']) && $_POST['Ailment']=='Gonorrhea') echo "selected='selected'";?>>Gonorrhea</option>
            <option value="HIB"<?php if(isset($_POST['Ailment']) && $_POST['Ailment']=='HIB') echo "selected='selected'";?>>HIB</option>
            <option value="Hand-Foot-and-Mouth"<?php if(isset($_POST['Ailment']) && $_POST['Ailment']=='Hand-Foot-and-Mouth') echo "selected='selected'";?>>Hand-Foot-and-Mouth</option>
            <option value="Hepatitis B"<?php if(isset($_POST['Ailment']) && $_POST['Ailment']=='Hepatitis B') echo "selected='selected'";?>>Hepatitis B</option>
            <option value="Hepatitis C"<?php if(isset($_POST['Ailment']) && $_POST['Ailment']=='Hepatitis C') echo "selected='selected'";?>>Hepatitis C</option>
            <option value="Jaundice"<?php if(isset($_POST['Ailment']) && $_POST['Ailment']=='Jaundice') echo "selected='selected'";?>>Jaundice</option>
            <option value="Legionellosis"<?php if(isset($_POST['Ailment']) && $_POST['Ailment']=='Legionellosis') echo "selected='selected'";?>>Legionellosis</option>
            <option value="Leprosy"<?php if(isset($_POST['Ailment']) && $_POST['Ailment']=='Leprosy') echo "selected='selected'";?>>Leprosy</option>
            <option value="Malaria"<?php if(isset($_POST['Ailment']) && $_POST['Ailment']=='Malaria') echo "selected='selected'";?>>Malaria</option>
            <option value="Plague"<?php if(isset($_POST['Ailment']) && $_POST['Ailment']=='Plague') echo "selected='selected'";?>>Plague</option>
            <option value="Rabies"<?php if(isset($_POST['Ailment']) && $_POST['Ailment']=='Rabies') echo "selected='selected'";?>>Rabies</option>
            <option value="Tuberculosis (TB)"<?php if(isset($_POST['Ailment']) && $_POST['Ailment']=='Tuberculosis (TB)') echo "selected='selected'";?>>Tuberculosis (TB)</option>
            <option value="Typhoid Fever"<?php if(isset($_POST['Ailment']) && $_POST['Ailment']=='Typhoid Fever') echo "selected='selected'";?>>Typhoid Fever</option>
            <option value="Thyroid"<?php if(isset($_POST['Ailment']) && $_POST['Ailment']=='Thyroid') echo "selected='selected'";?>>Thyroid</option>
            <option value="Yellow Fever"<?php if(isset($_POST['Ailment']) && $_POST['Ailment']=='Yellow Fever') echo "selected='selected'";?>>Yellow Fever</option>
            <option value="Stomach pain"<?php if(isset($_POST['Ailment']) && $_POST['Ailment']=='Stomach pain') echo "selected='selected'";?>>Stomach pain</option>
            </select>
            <input type="submit" name="suggest" class="btn7" value="Suggest">
        </form>
        <table>
            <tr>
                <th>id</th>
                <th>Ailment</th>
                <th>Specialist</th>
            </tr><br>

            <?php

            error_reporting(0);
            $connection = mysqli_connect("localhost","root","");
            $db = mysqli_select_db($connection,'symptoms');
            
            if(isset($_POST['suggest']))
            {
                $Ailment = $_POST['Ailment'];
                $query= "SELECT * FROM `Suggestion` where Ailment='$Ailment'";
                $query_run = mysqli_query($connection,$query);
                while($row = mysqli_fetch_array($query_run))
                {
                    ?>
                    <tr>
                        <td> <?php echo $row['id']; ?> </td>
                        <td> <?php echo $row['Ailment']; ?> </td>
                        <td> <?php echo $row['Specialist']; ?> </td>
                    </tr>

                    <?php
                }
            }

            ?>
        </table>
    </div>
    </center>
</body>
</html>