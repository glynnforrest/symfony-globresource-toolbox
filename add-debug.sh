#!/bin/bash

sed -i '' '98i\'$'\ndump($path);\n' ./vendor/symfony/config/Resource/GlobResource.php
