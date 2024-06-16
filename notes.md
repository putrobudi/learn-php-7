## Use clause

A simpler answer.

function ($quantity) use ($tax, &$total) { .. };

    The closure is a function assigned to a variable, so you can pass it around
    A closure is a separate namespace, normally, you can not access variables defined outside of this namespace. There comes the use keyword:
    use allows you to access (use) the succeeding variables inside the closure.
    use is early binding. That means the variable values are COPIED upon DEFINING the closure. So modifying $tax inside the closure has no external effect, unless it is a pointer, like an object is.
    You can pass in variables as pointers like in case of &$total. This way, modifying the value of $total DOES HAVE an external effect, the original variable's value changes.
    Variables defined inside the closure are not accessible from outside the closure either.
    Closures and functions have the same speed. Yes, you can use them all over your scripts.

As @Mytskine pointed out probably the best in-depth explanation is the RFC for closures. (Upvote him for this.)

## Arrow functions passes closures without the use clause

Short closures, also called arrow functions, are a way of writing shorter functions in PHP. This notation is useful when passing closures to functions like array_map or array_filter.

## Blade echo {{  }}

Remember that {{}} in Laravel is the equivalent of <?= ?>

## Exception handling vs if-else

from: https://stackoverflow.com/questions/651619/what-is-the-advantage-of-using-try-catch-versus-if-else
I'd use the try/catch block when the normal path through the code should proceed without error unless there are truly some exceptional conditions -- like the server being down, your credentials being expired or incorrect. I wouldn't necessarily use it to handle non-exceptional errors -- say like the current user not being in the correct role. That is, when you can reasonably expect and handle an error that is not an exceptional condition, I think you should do your checks.

In the case that you've described -- setting up and performing a query, a try/catch block is an excellent way to handle it as you normally expect the query to succeed. On the other hand, you'll probably want to check that the contents of result are what you expect with control flow logic rather than just attempting to use data that may not be valid for your purpose.

One thing that you want to look out for is sloppy use of try/catch. Try/catch shouldn't be used to protect yourself from bad programming -- the "I don't know what will happen if I do this so I'm going to wrap it in a try/catch and hope for the best" kind of programming. Typically you'll want to restrict the kinds of exceptions you catch to those that are not related to the code itself (server down, bad credentials, etc.) so that you can find and fix errors that are code related (null pointers, etc.).
