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
