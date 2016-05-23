#!/usr/bin/python
def test():
    yield 1
    yield 2
    yield 3

gen = test()
while a = gen.next():
    print a
print gen.next()
print gen.next()
print gen.next()
print gen.next()
print gen.next()
print gen.next()
