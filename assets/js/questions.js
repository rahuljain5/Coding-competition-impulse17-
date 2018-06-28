var Questions = [
    {
        question: `What is the output of code given below?
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
</pre>`,
        answer: "d",
        optionA: "1 2 3",
        optionB: "1 3",
        optionC: "1 3 2",
        optionD: "Compilation Error",
    },
    {
        question: "In C ,Variable names beginning with underscore is not encouraged. Why?",
        answer: "c",
        optionA: "It is not standardized",
        optionB: "To avoid conflicts since assemblers and loaders use such names",
        optionC: "To avoid conflicts since library routines use such names",
        optionD: "To avoid conflicts with environment variables of an operating system",
    },
    {
        question: "Which of these method can be used to make the main thread to be executed last among all the threads?",
        answer: "b",
        optionA: "stop()",
        optionB: "sleep()",
        optionC: "join()",
        optionD: "call()",
    },
    {
        question: `Consider the following try ...catch block
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
</pre>What will be the output?`,
        answer: "c",
        optionA: "Thrown Exception caught finally",
        optionB: "Exception caughtfinally",
        optionC: "Exception caught finally",
        optionD: "finally",
    },
    {
        question: "Which of the following is a finite loop?",
        answer: "d",
        optionA: "for(i=0;1;i++);{}",
        optionB: "for(i=0;i <10;i--){}",
        optionC: "for(i=0;i <10;i-1){}",
        optionD: "for(i=0;i <10;i++);{}",
    },
    {
        question: `State the output of the following code:
        <pre>
int a=10;
int b=5;
if(a>b)
{
    if(b>5)
        System.out.println("b is"+ b);
}
else
    System.out.println("a is"+ a);</pre>`,
        answer: "c",
        optionA: "b is 5 a is 10",
        optionB: "a is 10",
        optionC: "a is10",
        optionD: "b is 5",
    },
    {
        question: `Modulus operator, %, can be applied to which of these?`,
        answer: 'd',
        optionA: "Positive Integers",
        optionB: "Floating – point numbers",
        optionC: "Both A and B",
        optionD: "Integers",
    },
    {
        question: "A constructor",
        answer: 'b',
        optionA: "Constructs new data type",
        optionB: "Enables the initialization of an object as it is created",
        optionC: "Obtain memory for a new variable",
        optionD: "None of the above",
    },
    {
        question: "When a copy of an entire object is passed to a function, then it is referred to as",
        answer: 'b',
        optionA: "Pass-by-reference",
        optionB: "Pass-by-Value",
        optionC: "Pass-by-Pointer",
        optionD: "None of the above",
    },
    {
        question: `Which of the followings are true about constructors?
        <pre>
1. A class can have more than one constructor
2. They can be inherited
3. Their address can be referred
4. Constructors cannot be declared in protected section of the class
5. Constructors cannot return values
</pre>`,
        answer: 'd',
        optionA: "Only 1,2,4",
        optionB: "1,2,4,5",
        optionC: "1,3,5",
        optionD: "1,4,5",
    },
    {
        question: "C++ was originally developed by;",
        answer: 'd',
        optionA: "Clocksin and Mellish",
        optionB: "Donald E. Knuth",
        optionC: "Sir Richard Hadlee",
        optionD: "Bjarne Stroustrup",
    },
    {
        question: "Identify the token pasting operator?",
        answer: 'd',
        optionA: "+",
        optionB: "++",
        optionC: "#",
        optionD: "##",
    },
    {
        question: `Would the following program compile?
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
</pre>`,
        answer: 'c',
        optionA: "Yes, there is no problem in the code.",
        optionB: "Yes, but void *k is not correct.",
        optionC: "No, an error on the K++ statement",
        optionD: "No.",
    },
    {
        question: "Which of the following concepts of OOPS means exposing only necessary information to client?",
        answer: 'a',
        optionA: "Encapsulation",
        optionB: "Abstraction",
        optionC: "Data privacy",
        optionD: "Data binding",
    },
    {
        question: "what does the strcmpi means:",
        answer: 'c',
        optionA: "Appends one string to another",
        optionB: "Compare one string to another",
        optionC: "Compare one string to another without case sensitive",
        optionD: "Copies one string to another",
    }
];
