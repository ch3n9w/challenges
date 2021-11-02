import gmpy2

p = 10897303564586372033
q = 18100634715795211933

fain = (p-1) * (q-1)

e = 65537

d = gmpy2.invert(e, fain)

print(d)

print(d % (p-1))
print(d % (q-1))
print(gmpy2.invert(q,p))
