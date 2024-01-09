#程序文件
/usr/local/bin/
xray

#配置目录
/usr/local/etc/xray/
config.json

#共享目录
/usr/local/share/xray/
geoip.dat geosite.dat

#注册系统文件
/etc/systemd/system/
xray.service

rm /usr/local/bin/xray

wget -P /usr/local/bin/ https://storage.paotung.org/linux/install/xray/xray
wget -P /usr/local/etc/xray/ https://storage.paotung.org/linux/install/xray/config.json
wget -P /usr/local/share/xray/ https://storage.paotung.org/linux/install/xray/geoip.dat
wget -P /usr/local/share/xray/ https://storage.paotung.org/linux/install/xray/geosite.dat
wget -P /etc/systemd/system/ https://storage.paotung.org/linux/install/xray/xray.service
wget -P /etc/systemd/system/ https://storage.paotung.org/linux/install/xray/xray@.service


mkdir -p /var/log/xray
chmod -R 755 /var/log/xray
chmod 755 /usr/local/bin/xray
systemctl enable xray


cat > /usr/local/etc/xray/./config.json <<EOF
{
    "inbounds": [
        {
            "listen": "127.0.0.1",
            "port": 8080,
            "protocol": "vmess",
            "settings": {
                "clients": [
                    {
                        "id": "07246655-1b9b-f249-a4f7-5aefd3888888"
                    }
                ]
            },
            "streamSettings": {
                "network": "ws",
                "security": "none"
            }
        },
        {
            "listen": "0.0.0.0",
            "port": 443,
            "protocol": "vless",
            "settings": {
                "clients": [
                    {
                        "id": "07246655-1b9b-f249-a4f7-5aefd3888888",
                        "flow": "xtls-rprx-vision"
                    }
                ],
                "decryption": "none"
            },
            "streamSettings": {
                "network": "tcp",
                "security": "reality",
                "realitySettings": {
                    "dest": "8443",
                    "serverNames": ["snap.cloudns.org","www.snap.cloudns.org"],
                    "privateKey": "cGnBERYTqjCYZMLsk0_xH-ioR5V-GSIHipOgZGcrT18",
                    "publickey": "JGBxyfUHKZYihtDUcZHHP9nYOnE-rGulm94Fag2tsmE",
                    "shortIds": [""]
                }
            }
        }
    ],
    "outbounds": [
        {
            "protocol": "freedom"
        }
    ]
}
EOF
systemctl restart xray
systemctl status xray

systemctl start xray


删除
systemctl disable xray
rm -rf /etc/systemd/system/multi-user.target.wants/xray.service.
rm -rf /usr/local/bin/xray
rm -rf /etc/systemd/system/xray.service
rm -rf /etc/systemd/system/xray@.service
rm -rf /etc/systemd/system/xray.service.d
rm -rf /etc/systemd/system/xray@.service.d
rm -rf /usr/local/share/xray















