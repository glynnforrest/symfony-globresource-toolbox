# GlobResource debug

## Run

```
composer install

# patch GlobResource with var-dumper call to list globs as they are searched
./add-debug.sh

# load and print services config with an exclude key, src/NoLoad will be dumped
./run.php with-exclude.yaml

# no exclude key, src/NoLoad will not be dumped
./run.php no-exclude.yaml
```

Loaded services will be the same each time, but directories searched are different.


## Remove the var-dumper call

```
./remove-debug.sh
```
