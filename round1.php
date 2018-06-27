<?php
session_start();
$_SESSION['username'] = $_POST["name"];
if (!isset($_SESSION["ans"])) {
    ?>
<html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="bootstrap.min.css" rel="stylesheet" />

<head>
    <style>
        .left {
            position: absolute;
            left: 10%;
        }

        .right {
            position: absolute;
            left: 60%;
        }
    </style>
</head>

<body>
    <img id="implogo" src="./assets/images/impulse17.png" alt="impulse logo" height="150px" width="300px" />
    <h2 id="timer" style="display:inline; position:absolute; left:45%;">00:30:00</h2>
    <img id="fsmklogo" src="./assets/images/fsmk.jpg" alt="fsmk logo" height="120px" width="120px" style="float:right;" />
    <h3 id="username" style="display:inline; position:absolute; left:10%; top:20%">Team:
        <?php echo $_SESSION['username'] ?>
    </h3>
    <script>
        var timeoutHandle;

        function count() {

            var startTime = document.getElementById('timer').innerHTML;
            var pieces = startTime.split(":");
            var time = new Date();
            time.setHours(pieces[0]);
            time.setMinutes(pieces[1]);
            time.setSeconds(pieces[2]);
            var timedif = new Date(time.valueOf() - 1000);
            var newtime = timedif.toTimeString().split(" ")[0];
            if (newtime == '00:00:00') {
                alert('Time Up!\n Submit Now.');
                if (1) document.getElementById('button1').click();

            } else {
                document.getElementById('timer').innerHTML = newtime;
                timeoutHandle = setTimeout(count, 1000);
            }
        }
        count();
    </script>
    <h1 style="text-align:center">
        <b>
            <u>ROUND 1</u>
        </b>
    </h1>
    <div class="container-fluid">
        <div class="modal-dialog-lg">
            <div class="modal-content " id="modal-content1">
                <form id="forml" class="form-horizontal" method="post" action="result.php">
                    <input name="stamp" id="stam" type="text" style=" display:none;"></input>
                    <div id="q1">
                        <div class="modal-header">
                            <h3>
                                <span class="label label-info" id="qid1">1</span>What is the output of code given below?
                                <pre>
        #include <stdio.h>
        int main()
        {
            printf("%d ", 1);
            goto l1;
            printf("%d ", 2);
        }
        void foo()
        {
            l1 : printf("3 ", 3);
        }

</pre>
                            </h3>
                            <br/>
                            <fieldset id="field">
                                <h4>
                                    <label class="element-animation1 left">
                                        <input type="radio" name="q1_answer" value="a" autocomplete="off">1 2 3</label>
                                </h4>
                                <h4>
                                    <label class="element-animation2 right">
                                        <input type="radio" name="q1_answer" value="b">1 3</label>
                                    <br/>
                                    <br/>
                                </h4>
                                <h4>
                                    <label class="element-animation3 left ">
                                        <input type="radio" name="q1_answer" value="c">1 3 2</label>
                                </h4>
                                <h4>
                                    <label class="element-animation4 right">
                                        <input type="radio" name="q1_answer" value="d">Compilation Error</label>
                                </h4>
                            </fieldset>
                            <br/>
                            <hr/>
                            <h3>
                                <span class="label label-info" id="qid2">2</span>In C ,Variable names beginning with underscore is not encouraged. Why?</h3>
                            <br/>
                            <fieldset id="field">
                                <h4>
                                    <label class="element-animation1 left">
                                        <input type="radio" name="q2_answer" value="a" autocomplete="off">It is not standardized</label>
                                </h4>
                                <h4>
                                    <label class="element-animation2 right">
                                        <input type="radio" name="q2_answer" value="b">To avoid conflicts since assemblers
                                        <br/>and loaders use such names</label>
                                    <br/>
                                    <br/>
                                </h4>
                                <h4>
                                    <label class="element-animation3 left ">
                                        <input type="radio" name="q2_answer" value="c">To avoid conflicts since library routines
                                        <br/>use such names</label>
                                </h4>
                                <h4>
                                    <label class="element-animation4 right">
                                        <input type="radio" name="q2_answer" value="d">To avoid conflicts with environment
                                        <br/>variables of an operating system</label>
                                </h4>
                            </fieldset>
                            <br/>
                            <hr/>
                            <h3>
                                <span class="label label-info" id="qid3">3</span>Which of these method can be used to make the main thread to be executed last among
                                all the threads?</h3>
                            <br/>
                            <fieldset id="field">
                                <h4>
                                    <label class="element-animation1 left">
                                        <input type="radio" name="q3_answer" value="a" autocomplete="off">stop()</label>
                                </h4>
                                <h4>
                                    <label class="element-animation2 right">
                                        <input type="radio" name="q3_answer" value="b">sleep()</label>
                                    <br/>
                                    <br/>
                                </h4>
                                <h4>
                                    <label class="element-animation3 left ">
                                        <input type="radio" name="q3_answer" value="c">join()</label>
                                </h4>
                                <h4>
                                    <label class="element-animation4 right">
                                        <input type="radio" name="q3_answer" value="d">call()</label>
                                </h4>
                            </fieldset>
                            <br/>
                            <hr/>
                            <h3>
                                <span class="label label-info" id="qid4">4</span>Consider the following try ...catch block
                                <pre>
class TryCatch
  {
  public static void main(String args[])
  {
  test();
  }
    public static void test()
     {
       try
               {
      double x=0.0;
    throw(new Exception("Thrown"));
    }
       catch(Exception e)
    {
           System.out.print("Exception caught ");
      return ;
    }
        finally
                {
      System.out.println("finally");
                 }
            }
        }
</pre>What will be the output?
                            </h3>
                            <br/>
                            <fieldset id="field">
                                <h4>
                                    <label class="element-animation1 left">
                                        <input type="radio" name="q4_answer" value="a" autocomplete="off">Thrown Exception caught finally</label>
                                </h4>
                                <h4>
                                    <label class="element-animation2 right">
                                        <input type="radio" name="q4_answer" value="b">Exception caughtfinally</label>
                                    <br/>
                                    <br/>
                                </h4>
                                <h4>
                                    <label class="element-animation3 left ">
                                        <input type="radio" name="q4_answer" value="c">Exception caught finally</label>
                                </h4>
                                <h4>
                                    <label class="element-animation4 right">
                                        <input type="radio" name="q4_answer" value="d">finally</label>
                                </h4>
                            </fieldset>
                            <br/>
                            <hr/>
                            <h3>
                                <span class="label label-info" id="qid5">5</span> Which of the following is a finite loop?</h3>
                            <br/>
                            <fieldset id="field">
                                <h4>
                                    <label class="element-animation1 left">
                                        <input type="radio" name="q5_answer" value="a" autocomplete="off">for(i=0;1;i++);{}</label>
                                </h4>
                                <h4>
                                    <label class="element-animation2 right">
                                        <input type="radio" name="q5_answer" value="b">for(i=0;i
                                        <10;i--){}</label>
                                            <br/>
                                            <br/>
                                </h4>
                                <h4>
                                    <label class="element-animation3 left ">
                                        <input type="radio" name="q5_answer" value="c">for(i=0;i
                                        <10;i-1){}</label>
                                </h4>
                                <h4>
                                    <label class="element-animation4 right">
                                        <input type="radio" name="q5_answer" value="d">for(i=0;i
                                        <10;i++);{}</label>
                                </h4>
                            </fieldset>
                            <br/>
                            <hr/>
                            <h3>
                                <span class="label label-info" id="qid6">6</span>State the output of the following code:
                                <pre>
int a=10;
  int b=5;
  if(a>b)
   {
     if(b>5)
       System.out.println("b is"+ b);
   }
   else
       System.out.println("a is"+ a);</pre>
                            </h3>
                            <br/>
                            <fieldset id="field">
                                <h4>
                                    <label class="element-animation1 left">
                                        <input type="radio" name="q6_answer" value="a" autocomplete="off">b is 5 a is 10</label>
                                </h4>
                                <h4>
                                    <label class="element-animation2 right">
                                        <input type="radio" name="q6_answer" value="b">a is 10</label>
                                    <br/>
                                    <br/>
                                </h4>
                                <h4>
                                    <label class="element-animation3 left ">
                                        <input type="radio" name="q6_answer" value="c">a is10</label>
                                </h4>
                                <h4>
                                    <label class="element-animation4 right">
                                        <input type="radio" name="q6_answer" value="d">b is 5</label>
                                </h4>
                            </fieldset>
                            <br/>
                            <hr/>

                            <h3>
                                <span class="label label-info" id="qid7">7</span>Modulus operator, %, can be applied to which of these?</h3>
                            <br/>
                            <fieldset id="field">
                                <h4>
                                    <label class="element-animation1 left">
                                        <input type="radio" name="q7_answer" value="a" autocomplete="off">Positive Integers</label>
                                </h4>
                                <h4>
                                    <label class="element-animation2 right">
                                        <input type="radio" name="q7_answer" value="b">Floating – point numbers</label>
                                    <br/>
                                    <br/>
                                </h4>
                                <h4>
                                    <label class="element-animation3 left ">
                                        <input type="radio" name="q7_answer" value="c">Both A and B</label>
                                </h4>
                                <h4>
                                    <label class="element-animation4 right">
                                        <input type="radio" name="q7_answer" value="d">Integers</label>
                                </h4>
                            </fieldset>
                            <br/>
                            <hr/>
                            <h3>
                                <span class="label label-info" id="qid8">8</span>A constructor</h3>
                            <br/>
                            <fieldset id="field">
                                <h4>
                                    <label class="element-animation1 left">
                                        <input type="radio" name="q8_answer" value="a" autocomplete="off">Constructs new data type</label>
                                </h4>
                                <h4>
                                    <label class="element-animation2 right">
                                        <input type="radio" name="q8_answer" value="b">Enables the initialization of an object as it is created</label>
                                    <br/>
                                    <br/>
                                </h4>
                                <h4>
                                    <label class="element-animation3 left ">
                                        <input type="radio" name="q8_answer" value="c">Obtain memory for a new variable</label>
                                </h4>
                                <h4>
                                    <label class="element-animation4 right">
                                        <input type="radio" name="q8_answer" value="d">None of the above</label>
                                </h4>
                            </fieldset>
                            <br/>
                            <hr/>
                            <h3>
                                <span class="label label-info" id="qid9">9</span> When a copy of an entire object is passed to a function, then it is referred to
                                as
                            </h3>
                            <br/>
                            <fieldset id="field">
                                <h4>
                                    <label class="element-animation1 left">
                                        <input type="radio" name="q9_answer" value="a" autocomplete="off">Pass-by-reference</label>
                                </h4>
                                <h4>
                                    <label class="element-animation2 right">
                                        <input type="radio" name="q9_answer" value="b">Pass-by-Value</label>
                                    <br/>
                                    <br/>
                                </h4>
                                <h4>
                                    <label class="element-animation3 left ">
                                        <input type="radio" name="q9_answer" value="c">Pass-by-Pointer</label>
                                </h4>
                                <h4>
                                    <label class="element-animation4 right">
                                        <input type="radio" name="q9_answer" value="d">None of the above</label>
                                </h4>
                            </fieldset>
                            <br/>
                            <hr/>
                            <h3>
                                <span class="label label-info" id="qid10">10</span> Which of the followings are true about constructors?
                                <pre>
1. A class can have more than one constructor
2. They can be inherited
3. Their address can be referred
4. Constructors cannot be declared in protected section of the class
5. Constructors cannot return values
</pre>
                            </h3>
                            <br/>
                            <fieldset id="field">
                                <h4>
                                    <label class="element-animation1 left">
                                        <input type="radio" name="q10_answer" value="a" autocomplete="off">Only 1,2,4</label>
                                </h4>
                                <h4>
                                    <label class="element-animation2 right">
                                        <input type="radio" name="q10_answer" value="b">1,2,4,5</label>
                                    <br/>
                                    <br/>
                                </h4>
                                <h4>
                                    <label class="element-animation3 left ">
                                        <input type="radio" name="q10_answer" value="c">1,3,5</label>
                                </h4>
                                <h4>
                                    <label class="element-animation4 right">
                                        <input type="radio" name="q10_answer" value="d">1,4,5</label>
                                </h4>
                            </fieldset>
                            <br/>
                            <hr/>
                            <h3>
                                <span class="label label-info" id="qid11">11</span>C++ was originally developed by;</h3>
                            <br/>
                            <fieldset id="field">
                                <h4>
                                    <label class="element-animation1 left">
                                        <input type="radio" name="q11_answer" value="a" autocomplete="off">Clocksin and Mellish</label>
                                </h4>
                                <h4>
                                    <label class="element-animation2 right">
                                        <input type="radio" name="q11_answer" value="b">Donald E. Knuth</label>
                                    <br/>
                                    <br/>
                                </h4>
                                <h4>
                                    <label class="element-animation3 left ">
                                        <input type="radio" name="q11_answer" value="c">Sir Richard Hadlee</label>
                                </h4>
                                <h4>
                                    <label class="element-animation4 right">
                                        <input type="radio" name="q11_answer" value="d">Bjarne Stroustrup</label>
                                </h4>
                            </fieldset>
                            <br/>
                            <hr/>
                            <h3>
                                <span class="label label-info" id="qid12">12</span>Identify the token pasting operator?</h3>
                            <br/>
                            <fieldset id="field">
                                <h4>
                                    <label class="element-animation1 left">
                                        <input type="radio" name="q12_answer" value="a" autocomplete="off">+</label>
                                </h4>
                                <h4>
                                    <label class="element-animation2 right">
                                        <input type="radio" name="q12_answer" value="b">++</label>
                                    <br/>
                                    <br/>
                                </h4>
                                <h4>
                                    <label class="element-animation3 left ">
                                        <input type="radio" name="q12_answer" value="c">#</label>
                                </h4>
                                <h4>
                                    <label class="element-animation4 right">
                                        <input type="radio" name="q12_answer" value="d">##</label>
                                </h4>
                            </fieldset>
                            <br/>
                            <hr/>
                            <h3>
                                <span class="label label-info" id="qid13">13</span>Would the following program compile?
                                <pre>
main()
{
int a=10, *j;
void *k;
J = k = &a;
J++;
K++;
printf(“\n%u %u”, j, k);
}
</pre>
                            </h3>
                            <br/>
                            <fieldset id="field">
                                <h4>
                                    <label class="element-animation1 left">
                                        <input type="radio" name="q13_answer" value="a" autocomplete="off">Yes, there is no problem in the code.</label>
                                </h4>
                                <h4>
                                    <label class="element-animation2 right">
                                        <input type="radio" name="q13_answer" value="b">Yes, but void *k is not correct.</label>
                                    <br/>
                                    <br/>
                                </h4>
                                <h4>
                                    <label class="element-animation3 left ">
                                        <input type="radio" name="q13_answer" value="c">No, an error on the K++ statement</label>
                                </h4>
                                <h4>
                                    <label class="element-animation4 right">
                                        <input type="radio" name="q13_answer" value="d">No.</label>
                                </h4>
                            </fieldset>
                            <br/>
                            <hr/>
                            <h3>
                                <span class="label label-info" id="qid14">14</span>Which of the following concepts of OOPS means exposing only necessary information
                                to client?</h3>
                            <br/>
                            <fieldset id="field">
                                <h4>
                                    <label class="element-animation1 left">
                                        <input type="radio" name="q14_answer" value="a" autocomplete="off">Encapsulation</label>
                                </h4>
                                <h4>
                                    <label class="element-animation2 right">
                                        <input type="radio" name="q14_answer" value="b">Abstraction</label>
                                    <br/>
                                    <br/>
                                </h4>
                                <h4>
                                    <label class="element-animation3 left ">
                                        <input type="radio" name="q14_answer" value="c">Data privacy</label>
                                </h4>
                                <h4>
                                    <label class="element-animation4 right">
                                        <input type="radio" name="q14_answer" value="d">Data binding</label>
                                </h4>
                            </fieldset>
                            <br/>
                            <hr/>
                            <h3>
                                <span class="label label-info" id="qid15">15</span>what does the strcmpi means:</h3>
                            <br/>
                            <fieldset id="field">
                                <h4>
                                    <label class="element-animation1 left">
                                        <input type="radio" name="q15_answer" value="a" autocomplete="off">Appends one string to another</label>
                                </h4>
                                <h4>
                                    <label class="element-animation2 right">
                                        <input type="radio" name="q15_answer" value="b">Compare one string to another</label>
                                    <br/>
                                    <br/>
                                </h4>
                                <h4>
                                    <label class="element-animation3 left ">
                                        <input type="radio" name="q15_answer" value="c">Compare one string to another
                                        <br/> without case sensitive</label>
                                </h4>
                                <h4>
                                    <label class="element-animation4 right">
                                        <input type="radio" name="q15_answer" value="d">Copies one string to another</label>
                                </h4>
                            </fieldset>
                            <br/>
                            <hr/>

                            <h3>
                                <span class="label label-info" id="qid16">16</span>Conversion of float to int causes _______ of the fractional part</h3>
                            <br/>
                            <fieldset id="field">
                                <h4>
                                    <label class="element-animation1 left">
                                        <input type="radio" name="q16_answer" value="a" autocomplete="off">conversion</label>
                                </h4>
                                <h4>
                                    <label class="element-animation2 right">
                                        <input type="radio" name="q16_answer" value="b">truncation</label>
                                    <br/>
                                    <br/>
                                </h4>
                                <h4>
                                    <label class="element-animation3 left ">
                                        <input type="radio" name="q16_answer" value="c">rounding off</label>
                                </h4>
                                <h4>
                                    <label class="element-animation4 right">
                                        <input type="radio" name="q16_answer" value="d">drooping</label>
                                </h4>
                            </fieldset>
                            <br/>
                            <hr/>
                            <h3>
                                <span class="label label-info" id="qid17">17</span>Which of the following are control instruction in C</h3>
                            <br/>
                            <fieldset id="field">
                                <h4>
                                    <label class="element-animation1 left">
                                        <input type="radio" name="q17_answer" value="a" autocomplete="off">Sequence control</label>
                                </h4>
                                <h4>
                                    <label class="element-animation2 right">
                                        <input type="radio" name="q17_answer" value="b">Selection control</label>
                                    <br/>
                                    <br/>
                                </h4>
                                <h4>
                                    <label class="element-animation3 left ">
                                        <input type="radio" name="q17_answer" value="c">Case control</label>
                                </h4>
                                <h4>
                                    <label class="element-animation4 right">
                                        <input type="radio" name="q17_answer" value="d">All of the above</label>
                                </h4>
                            </fieldset>
                            <br/>
                            <hr/>
                            <h3>
                                <span class="label label-info" id="qid18">18</span>Which of the following concepts means determining at runtime?what method to invoke?</h3>
                            <br/>
                            <fieldset id="field">
                                <h4>
                                    <label class="element-animation1 left">
                                        <input type="radio" name="q18_answer" value="a" autocomplete="off">Data hiding</label>
                                </h4>
                                <h4>
                                    <label class="element-animation2 right">
                                        <input type="radio" name="q18_answer" value="b">Dynamic typing</label>
                                    <br/>
                                    <br/>
                                </h4>
                                <h4>
                                    <label class="element-animation3 left ">
                                        <input type="radio" name="q18_answer" value="c">Dynamic Binding</label>
                                </h4>
                                <h4>
                                    <label class="element-animation4 right">
                                        <input type="radio" name="q18_answer" value="d">Dynamic Loading</label>
                                </h4>
                            </fieldset>
                            <br/>
                            <hr/>
                            <h3>
                                <span class="label label-info" id="qid19">19</span>Pointer is not supported by</h3>
                            <br/>
                            <fieldset id="field">
                                <h4>
                                    <label class="element-animation1 left">
                                        <input type="radio" name="q19_answer" value="a" autocomplete="off">C</label>
                                </h4>
                                <h4>
                                    <label class="element-animation2 right">
                                        <input type="radio" name="q19_answer" value="b">C++</label>
                                    <br/>
                                    <br/>
                                </h4>
                                <h4>
                                    <label class="element-animation3 left ">
                                        <input type="radio" name="q19_answer" value="c">JAVA</label>
                                </h4>
                                <h4>
                                    <label class="element-animation4 right">
                                        <input type="radio" name="q19_answer" value="d">None of the Above</label>
                                </h4>
                            </fieldset>
                            <br/>
                            <hr/>

                            <h3>
                                <span class="label label-info" id="qid20">20</span>To initiate an object java uses.</h3>
                            <br/>
                            <fieldset id="field">
                                <h4>
                                    <label class="element-animation1 left">
                                        <input type="radio" name="q20_answer" value="a" autocomplete="off">New</label>
                                </h4>
                                <h4>
                                    <label class="element-animation2 right">
                                        <input type="radio" name="q20_answer" value="b">Create</label>
                                    <br/>
                                    <br/>
                                </h4>
                                <h4>
                                    <label class="element-animation3 left ">
                                        <input type="radio" name="q20_answer" value="c">void</label>
                                </h4>
                                <h4>
                                    <label class="element-animation4 right">
                                        <input type="radio" name="q20_answer" value="d">Init</label>
                                </h4>
                            </fieldset>
                            <br/>
                            <hr/>
                            <h3>
                                <span class="label label-info" id="qid21">21</span>Which keyword turns a variable declaration into constant declaration in java?</h3>
                            <br/>
                            <fieldset id="field">
                                <h4>
                                    <label class="element-animation1 left">
                                        <input type="radio" name="q21_answer" value="a" autocomplete="off">CONST</label>
                                </h4>
                                <h4>
                                    <label class="element-animation2 right">
                                        <input type="radio" name="q21_answer" value="b">CONSTANT</label>
                                    <br/>
                                    <br/>
                                </h4>
                                <h4>
                                    <label class="element-animation3 left ">
                                        <input type="radio" name="q21_answer" value="c">FINAL</label>
                                </h4>
                                <h4>
                                    <label class="element-animation4 right">
                                        <input type="radio" name="q21_answer" value="d">FIXED</label>
                                </h4>
                            </fieldset>
                            <br/>
                            <hr/>
                            <h3>
                                <span class="label label-info" id="qid22">22</span> which of the following is a primitive type on java?</h3>
                            <br/>
                            <fieldset id="field">
                                <h4>
                                    <label class="element-animation1 left">
                                        <input type="radio" name="q22_answer" value="a" autocomplete="off">Byte</label>
                                </h4>
                                <h4>
                                    <label class="element-animation2 right">
                                        <input type="radio" name="q22_answer" value="b">Character</label>
                                    <br/>
                                    <br/>
                                </h4>
                                <h4>
                                    <label class="element-animation3 left ">
                                        <input type="radio" name="q22_answer" value="c">void</label>
                                </h4>
                                <h4>
                                    <label class="element-animation4 right">
                                        <input type="radio" name="q22_answer" value="d">Class</label>
                                </h4>
                            </fieldset>
                            <br/>
                            <hr/>
                            <h3>
                                <span class="label label-info" id="qid23">23</span>What will be the output of following code:
                                <pre>
#include<stdio.h>
int main()
{
printf("%d",sizeof(3.8));
return 0;
}
</pre>
                            </h3>
                            <br/>
                            <fieldset id="field">
                                <h4>
                                    <label class="element-animation1 left">
                                        <input type="radio" name="q23_answer" value="a" autocomplete="off">2</label>
                                </h4>
                                <h4>
                                    <label class="element-animation2 right">
                                        <input type="radio" name="q23_answer" value="b">8</label>
                                    <br/>
                                </h4>
                                <h4>
                                    <label class="element-animation3 left ">
                                        <input type="radio" name="q23_answer" value="c">4</label>
                                </h4>
                                <h4>
                                    <label class="element-animation4 right">
                                        <input type="radio" name="q23_answer" value="d">16</label>
                                </h4>
                            </fieldset>
                            <br/>
                            <hr/>
                            <h3>
                                <span class="label label-info" id="qid24">24</span>ungetc is used:</h3>
                            <br/>
                            <fieldset id="field">
                                <h4>
                                    <label class="element-animation1 left">
                                        <input type="radio" name="q24_answer" value="a" autocomplete="off">to get a char</label>
                                </h4>
                                <h4>
                                    <label class="element-animation2 right">
                                        <input type="radio" name="q24_answer" value="b">to undo a character read operation</label>
                                    <br/>
                                    <br/>
                                </h4>
                                <h4>
                                    <label class="element-animation3 left ">
                                        <input type="radio" name="q24_answer" value="c">to push a character back to file</label>
                                </h4>
                                <h4>
                                    <label class="element-animation4 right">
                                        <input type="radio" name="q24_answer" value="d">none of the above</label>
                                </h4>
                            </fieldset>
                            <br/>
                            <hr/>
                            <h3>
                                <span class="label label-info" id="qid25">25</span>The C language is.</h3>
                            <br/>
                            <fieldset id="field">
                                <h4>
                                    <label class="element-animation1 left">
                                        <input type="radio" name="q25_answer" value="a" autocomplete="off">Context Free Language</label>
                                </h4>
                                <h4>
                                    <label class="element-animation2 right">
                                        <input type="radio" name="q25_answer" value="b">Context Sensitive Language</label>
                                    <br/>
                                    <br/>
                                </h4>
                                <h4>
                                    <label class="element-animation3 left ">
                                        <input type="radio" name="q25_answer" value="c">Regular Language</label>
                                </h4>
                                <h4>
                                    <label class="element-animation4 right">
                                        <input type="radio" name="q25_answer" value="d">Parsible Fully only by TM</label>
                                </h4>
                            </fieldset>
                            <br/>
                            <hr/>
                            <h3>
                                <span class="label label-info" id="qid26">26</span>The number of tokens in the following C statement is
                                <pre>
printf("i = %d, &i = %x", i, &i);</pre>
                            </h3>
                            <br/>
                            <fieldset id="field">
                                <h4>
                                    <label class="element-animation1 left">
                                        <input type="radio" name="q26_answer" value="a" autocomplete="off">3</label>
                                </h4>
                                <h4>
                                    <label class="element-animation2 right">
                                        <input type="radio" name="q26_answer" value="b">5</label>
                                    <br/>
                                    <br/>
                                </h4>
                                <h4>
                                    <label class="element-animation3 left ">
                                        <input type="radio" name="q26_answer" value="c">10</label>
                                </h4>
                                <h4>
                                    <label class="element-animation4 right">
                                        <input type="radio" name="q26_answer" value="d">21</label>
                                </h4>
                            </fieldset>
                            <br/>
                            <hr/>
                            <h3>
                                <span class="label label-info" id="qid27">27</span>Assume that the size of an integer is 4 bytes. Predict the output?
                                <pre>#include <stdio.h>
int fun()
{
    puts(" Hello ");
    return 10;
}

int main()
{
    printf("%d", sizeof(fun()));
    return 0;
}
</pre>
                                <br/>
                                <fieldset id="field">
                                    <h4>
                                        <label class="element-animation1 left">
                                            <input type="radio" name="q27_answer" value="a" autocomplete="off"> Hello 4</label>
                                    </h4>
                                    <h4>
                                        <label class="element-animation2 right">
                                            <input type="radio" name="q27_answer" value="b">4</label>
                                        <br/>
                                        <br/>
                                    </h4>
                                    <h4>
                                        <label class="element-animation3 left ">
                                            <input type="radio" name="q27_answer" value="c">Hello</label>
                                    </h4>
                                    <h4>
                                        <label class="element-animation4 right">
                                            <input type="radio" name="q27_answer" value="d">Compilation Error</label>
                                    </h4>
                                </fieldset>
                                <br/>
                                <hr/>
                                <h3>
                                    <span class="label label-info" id="qid28">28</span>Predict the output?
                                    <pre>
#include <stdio.h>
int main()
{
    int a[][3] = {1, 2, 3, 4, 5, 6};
    int (*ptr)[3] = a;
    printf("%d %d ", (*ptr)[1], (*ptr)[2]);
    ++ptr;
    printf("%d %d\n", (*ptr)[1], (*ptr)[2]);
    return 0;
}
</pre>
                                    <br/>
                                    <fieldset id="field">
                                        <h4>
                                            <label class="element-animation1 left">
                                                <input type="radio" name="q28_answer" value="a" autocomplete="off">2 3 5 6</label>
                                        </h4>
                                        <h4>
                                            <label class="element-animation2 right">
                                                <input type="radio" name="q28_answer" value="b">2 3 4 5</label>
                                            <br/>
                                            <br/>
                                        </h4>
                                        <h4>
                                            <label class="element-animation3 left ">
                                                <input type="radio" name="q28_answer" value="c">4 5 0 0</label>
                                        </h4>
                                        <h4>
                                            <label class="element-animation4 right">
                                                <input type="radio" name="q28_answer" value="d">Error</label>
                                        </h4>
                                    </fieldset>
                                    <br/>
                                    <hr/>
                                    <h3>
                                        <span class="label label-info" id="qid29">29</span>How many times will Impulse be printed?
                                        <pre>
#include <stdio.h>

int main()
{
    int i = 1024;
    for (; i; i >>= 1)
        printf("Impulse");
    return 0;
}
</pre>
                                        <br/>
                                        <fieldset id="field">
                                            <h4>
                                                <label class="element-animation1 left">
                                                    <input type="radio" name="q29_answer" value="a" autocomplete="off">10</label>
                                            </h4>
                                            <h4>
                                                <label class="element-animation2 right">
                                                    <input type="radio" name="q29_answer" value="b">11</label>
                                                <br/>
                                                <br/>
                                            </h4>
                                            <h4>
                                                <label class="element-animation3 left ">
                                                    <input type="radio" name="q29_answer" value="c">Infinite</label>
                                            </h4>
                                            <h4>
                                                <label class="element-animation4 right">
                                                    <input type="radio" name="q29_answer" value="d">Error</label>
                                            </h4>
                                        </fieldset>
                                        <br/>
                                        <hr/>
                                        <h3>
                                            <span class="label label-info" id="qid30">30</span>Output?
                                            <pre>
# include <stdio.h>
# define scanf  "%s Coding "
int main()
{
   printf(scanf, scanf);
   return 0;
}
</pre>
                                            <br/>
                                            <fieldset id="field">
                                                <h4>
                                                    <label class="element-animation1 left">
                                                        <input type="radio" name="q30_answer" value="a" autocomplete="off">%s Coding Coding</label>
                                                </h4>
                                                <h4>
                                                    <label class="element-animation2 right">
                                                        <input type="radio" name="q30_answer" value="b">%s Coding %s Coding</label>
                                                    <br/>
                                                    <br/>
                                                </h4>
                                                <h4>
                                                    <label class="element-animation3 left ">
                                                        <input type="radio" name="q30_answer" value="c">Coding,Coding</label>
                                                </h4>
                                                <h4>
                                                    <label class="element-animation4 right">
                                                        <input type="radio" name="q30_answer" value="d">Error</label>
                                                </h4>
                                            </fieldset>
                                            <br/>
                                            <hr/>

                                            <button type="submit" id="button1" name="submit" class="btn btn-primary btn-lg" value="next" style="align:center; position:absolute; left:47%;"
                                                onclick=my()>SUBMIT</button>
                                            <script>
                                                function my() {
                                                    var startTim = document.getElementById('timer').innerHTML;
                                                    var piece = startTim.split(":");
                                                    var minutes = piece[1];
                                                    var seconds = piece[2];
                                                    var time = new Date();
                                                    time.setHours(piece[0]);
                                                    time.setMinutes(30 - piece[1]);
                                                    time.setSeconds(00 - piece[2]);
                                                    var t = time.toTimeString().split(" ")[0];
                                                    document.getElementById('stam').value = t;
                                                }
                                            </script>
                </form>
                </div>
                </div>
                <br/>
            </div>
        </div>
    </div>
    </div>
</body>
<?php
} else {
    echo ("No Retry allowed!");
    print_r($_POST);
}
?>
