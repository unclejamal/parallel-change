## Parallel Change Kata

### What is Parallel Change?

Also known as Expand and Contract, this is a pattern that can be used to evolve a design safely by introducing 
backwards compatible changes to a software design without breaking existing 
clients of code. It involves three steps:

1. expand (add the new element - class, method, variable)
2. migrate (clients of the existing element to use the new one introduced in step 1.)
3. contract (remove the old element - class, method, variable)

A more detail discussion of the pattern, with examples, may be found in
[Danilo Sato's article on Parallel Change](https://martinfowler.com/bliki/ParallelChange.html).

### The Exercise

The purpose of this exercise is to change the shopping cart from just
supporting one item of shopping to multiple. Specifically, taking the Ruby example,
there is a variable called `@price`. Instead, to support multiple prices,
instead the developer should now introduce a `@prices` collection object (an array).
Do this in such a way that the unit tests provided remain green (this is a refactoring, after all). if need be
introduce more tests to enhance safety.
