if [ ! -d "/sys/class/gpio/gpio6/" ]; then
    echo "6" > /sys/class/gpio/export
fi
echo "out" > /sys/class/gpio/gpio6/direction
echo "$1" > /sys/class/gpio/gpio6/value
