<!DOCTYPE html>
<head><title>Grading System</title></head>

<!--Bootstrap-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

<!--JQuery-->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!--File Linking-->
<link rel="stylesheet" href="main.css">
<script src="main.js"></script>

<!--Responsive-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<body>
    <header class="h2">Grading System</header>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" class="needs-validation" novalidate>
    <div class="container">
        <div class="row">

            <div class="col-sm-2">
            </div>

            <!--MidTerm Grades-->
            <div class="col-sm-3">
                <h3>Mid-Term Grades</h3>
                <!--Quizzes-->
                <label>Quiz 1 & 2</label>
                <div class="form-row">
                    <div class="col-sm-6 mb-2">
                        <input type="number" class="form-control"
                        placeholder="Grade" name="Quiz1Grade" id="validationCustom01" required>
                    </div>
                    <div class="col-sm-6 mb-2">
                        <input type="number" class="form-control"
                        placeholder="Weight" name="Quiz1Weight" id="validationCustom01" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-sm-6 mb-2">
                        <input type="number" class="form-control"
                        placeholder="Grade" name="Quiz2Grade" id="validationCustom01" required>
                    </div>
                    <div class="col-sm-6 mb-2">
                        <input type="number" class="form-control"
                        placeholder="Weight" name="Quiz2Weight" id="validationCustom01" required>
                    </div>
                </div>
                <!--LabWorks-->
                <label>Lab Work 1 & 2</label>
                <div class="form-row">
                    <div class="col-sm-6 mb-2">
                        <input type="number" class="form-control"
                        placeholder="Grade" name="Lab1Grade" id="validationCustom01" required>
                    </div>
                    <div class="col-sm-6 mb-2">
                        <input type="number" class="form-control"
                        placeholder="Weight" name="Lab1Weight" id="validationCustom01" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-sm-6 mb-2">
                        <input type="number" class="form-control"
                        placeholder="Grade" name="Lab2Grade" id="validationCustom01" required>
                    </div>
                    <div class="col-sm-6 mb-2">
                        <input type="number" class="form-control"
                        placeholder="Weight" name="Lab2Weight" id="validationCustom01" required>
                    </div>
                </div>
                <!--Examination-->
                <label>Examination</label>
                <div class="form-row">
                    <div class="col-sm-6 mb-2">
                        <input type="number" class="form-control"
                        placeholder="Grade" name="Exam1Grade" id="validationCustom01" required>
                    </div>
                    <div class="col-sm-6 mb-2">
                        <input type="number" class="form-control"
                        placeholder="Weight" name="Exam1Weight" id="validationCustom01" required>
                    </div>
                </div>
                <!--Attendance-->
                <label>Attendance</label>
                <div class="form-row">
                    <div class="col-sm-6 mb-2">
                        <input type="number" class="form-control"
                        placeholder="Present" name="Present1" id="validationCustom01" required>
                    </div>
                    <div class="col-sm-6 mb-2">
                        <input type="number" class="form-control"
                        placeholder="No. of Days" name="Days1" id="validationCustom01" required>
                    </div>
                </div>
                </form>
            </div>

            <div class="col-sm-2">
            </div>

            <!--Final Grades-->
            <div class="col-sm-3">
                <h3>Final Grades</h3>
                <!--Quizzes-->
                <label>Quiz 1 & 2</label>
                <div class="form-row">
                    <div class="col-sm-6 mb-2">
                        <input type="number" class="form-control"
                        placeholder="Grade" name="Quiz3Grade" id="validationCustom01" required>
                    </div>
                    <div class="col-sm-6 mb-2">
                        <input type="number" class="form-control"
                        placeholder="Weight" name="Quiz3Weight" id="validationCustom01" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-sm-6 mb-2">
                        <input type="number" class="form-control"
                        placeholder="Grade" name="Quiz4Grade" id="validationCustom01" required>
                    </div>
                    <div class="col-sm-6 mb-2">
                        <input type="number" class="form-control"
                        placeholder="Weight" name="Quiz4Weight" id="validationCustom01" required>
                    </div>
                </div>
                <!--LabWorks-->
                <label>Lab Work 1 & 2</label>
                <div class="form-row">
                    <div class="col-sm-6 mb-2">
                        <input type="number" class="form-control"
                        placeholder="Grade" name="Lab3Grade" id="validationCustom01" required>
                    </div>
                    <div class="col-sm-6 mb-2">
                        <input type="number" class="form-control"
                        placeholder="Weight" name="Lab3Weight" id="validationCustom01" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-sm-6 mb-2">
                        <input type="number" class="form-control"
                        placeholder="Grade" name="Lab4Grade" id="validationCustom01" required>
                    </div>
                    <div class="col-sm-6 mb-2">
                        <input type="number" class="form-control"
                        placeholder="Weight" name="Lab4Weight" id="validationCustom01" required>
                    </div>
                </div>
                <!--Examination-->
                <label>Examination</label>
                <div class="form-row">
                    <div class="col-sm-6 mb-2">
                        <input type="number" class="form-control"
                        placeholder="Grade" name="Exam2Grade" id="validationCustom01" required>
                    </div>
                    <div class="col-sm-6 mb-2">
                        <input type="number" class="form-control"
                        placeholder="Weight" name="Exam2Weight" id="validationCustom01" required>
                    </div>
                </div>
                <!--Attendance-->
                <label>Attendance</label>
                <div class="form-row">
                    <div class="col-sm-6 mb-2">
                        <input type="number" class="form-control"
                        placeholder="Present" name="Present2" id="validationCustom01" required>
                    </div>
                    <div class="col-sm-6 mb-2">
                        <input type="number" class="form-control"
                        placeholder="No. of Days" name="Days2" id="validationCustom01" required>
                    </div>
                </div>
            </div>
            

            <div class="col-sm-2">
            </div>
            <div class="col-sm-12">
                <center><button type="submit" class="btn btn-info button">Evaluate</button></center>
            </div>

        </div>
    </div>
    </form> 

    <footer style="background-color: rgb(16, 42, 90); padding: 100px; color: white; margin-top:50px;">
        <center><p>for educational purposes only</p></center>

        <?php 
        //Mid-Term Grades Components
        $quizAve1 = (((($_REQUEST["Quiz1Grade"]+$_REQUEST["Quiz2Grade"])/($_REQUEST["Quiz1Weight"]+$_REQUEST["Quiz2Weight"]))*100)*0.40);
        $labAve1 = (((($_REQUEST["Lab1Grade"]+$_REQUEST["Lab2Grade"])/($_REQUEST["Lab1Weight"]+$_REQUEST["Lab2Weight"]))*100)*0.50);
        $examAve1 = ((($_REQUEST["Exam1Grade"]/$_REQUEST["Exam1Weight"])*100)*0.40);
        $present1 = ((($_REQUEST["Present1"]/$_REQUEST["Days1"])*100)*0.10);

        /*Class Participation Average for Mid-terms*/ $Ave1 = ((($quizAve1+$labAve1+$present1)*0.60)+$examAve1);

        //Final Grades Components
        $quizAve2 = (((($_REQUEST["Quiz3Grade"]+$_REQUEST["Quiz4Grade"])/($_REQUEST["Quiz3Weight"]+$_REQUEST["Quiz4Weight"]))*100)*0.40);
        $labAve2 = (((($_REQUEST["Lab3Grade"]+$_REQUEST["Lab4Grade"])/($_REQUEST["Lab3Weight"]+$_REQUEST["Lab4Weight"]))*100)*0.50);
        $examAve2 = ((($_REQUEST["Exam2Grade"]/$_REQUEST["Exam2Weight"])*100)*0.40);
        $present2 = ((($_REQUEST["Present2"]/$_REQUEST["Days2"])*100)*0.10);

        /*Class Participation Average for finals*/ $Ave2 = ((($quizAve2+$labAve2+$present2)*0.60)+$examAve2);

        //Semestral Grade computation for both Mid-terms & Finals
        $SemGrade = ($Ave2*0.50)+($Ave1*0.50);

        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            if ($SemGrade >= 50) {
                //If grade is above or equal to 50 it passed 
                echo"<script type='text/javascript'>  
                Swal.fire({
                    icon: 'success',
                    title: 'Passed',
                    html: 
                        '<hr><p>Mid-Terms:";echo("&nbsp");echo$Ave1;echo"</p>' +
                        '<p>Finals:";echo("&nbsp");echo$Ave2;echo"</p><hr>' +
                        '<p>Semstral:";echo("&nbsp");echo$SemGrade;echo"</p>',
                    backdrop: 'rgb(16, 42, 90)',              
                })
                </script>
                ";
            }
            else if ($SemGrade < 50) {
                //If grade is below 50 it is failed 
                echo"<script type='text/javascript'>  
                Swal.fire({
                    icon: 'error',
                    title: 'Failed',
                    html: 
                        '<hr><p>Mid-Terms:";echo("&nbsp");echo$Ave1;echo"</p>' +
                        '<p>Finals:";echo("&nbsp");echo$Ave2;echo"</p><hr>' +
                        '<p>Semstral:";echo("&nbsp");echo$SemGrade;echo"</p>',
                    backdrop: 'rgb(16, 42, 90)',              
                })
                </script>
                ";
            }
            else if ($SemGrade == null) {
                echo"<script type='text/javascript'>  
                Swal.fire({
                    icon: 'error',
                    title: 'Currently recieved an error processing the Grades',           
                })
                </script>
                ";
            }
        }
    ?>  
    </footer>
    
</body>
</html>