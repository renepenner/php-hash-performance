# Hash Performance Test

Just a little script to check the performance difference between md5. sha1 and sha2 (256bit and 512bit)

## Results

The test was executed in docker with php 7.1-fpm (offical image) on my Macbook Pro 13" (late 2012) 8GB RAM and Intel Core i5 (2,5GHz)

1.000.000 interations with a small string and the interation number as slat.

### md5($content)
```
md5: 34743e1e454e967eb76a16c66372b0ef
0.36073684692383 sec
```

### sha1($content)
```
sha1: cf048574877806a5536e05a788f287de9a318108
0.41914701461792 sec
```

### sha2 256 -- hash('sha256', $content)
```
sha2 (256): 2432a5281590f6c17323a8dc9c5442757e79fdc4d2028ae36bcb0010410dfc64
0.81574511528015 sec
```

### sha2 512 -- hash('sha512', $content)
```
sha2 (512): 832cfdfba46de039bb829e20933e1f4e2bfd9e4dcefa4b3b0481a78671eabced43f5e5e781448ac7e181731c059671b8281ed71095507260a5f125d5498d2470
1.0550019741058 sec
```
