#!/bin/sh
LDFLAGS="-L/home/lr26/prestashop-1.7.3.3-0/common/lib $LDFLAGS"
export LDFLAGS
CFLAGS="-I/home/lr26/prestashop-1.7.3.3-0/common/include $CFLAGS"
export CFLAGS
CXXFLAGS="-I/home/lr26/prestashop-1.7.3.3-0/common/include $CXXFLAGS"
export CXXFLAGS
		    
PKG_CONFIG_PATH="/home/lr26/prestashop-1.7.3.3-0/common/lib/pkgconfig"
export PKG_CONFIG_PATH
