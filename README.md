# INTERCEPTOR:

**Interceptor Is a simple Ip-Grabber tool, It also provide you some information reletad to your target ip thanks to a custom redirect link**  

<br>
<p align = "center">
<img src = "https://img.shields.io/github/stars/Lucksi/Interceptor">
<img src = "https://img.shields.io/github/forks/Lucksi/Interceptor">
<img src = "https://img.shields.io/github/license/Lucksi/Interceptor">
<img src = "https://img.shields.io/github/repo-size/Lucksi/Interceptor">
<img src= "https://img.shields.io/github/languages/count/Lucksi/Interceptor">
<img src = "https://visitor-badge.laobi.icu/badge?page_id=Lucksi.Interceptor">
</p>
<br>

# DISCLAIMER
**THIS TOOL IS FOR EDUCATIONAL AND TESTING PURPOSES ONLY I DO NOT ASSUME ANY KIND OF RESPONSABILITY FOR ANY INTENTIONAL OR UNINTENTIONAL DAMAGE YOU WILL CAUSE WITH THIS TOOL, ATTACKS WITHOUT SOMEONE CONSENT IS CONSIDERATED ILLEGAL BY THE LAW. BY USING THIS TOOL YOU ACCEPT THIS CONDITION.USE IT WITH GOOD SENSE**

<br>

# SCREENSHOT:
![Screenshot](Screenshot/Screenshot.png)

<br>

# INSTALLATION(LINUX):
```bash
git clone https://github.com/Lucksi/Interceptor
cd Interceptor
sudo chmod +x Installer.sh
sudo bash Installer.sh
```

<br>

# USAGE(LINUX):
```bash
sudo bash Interceptor.sh
```

<br>

# ATTENTION:
**In case Your link doesnt show up Try to edit the Interceptor.sh file and replace:**
```bash
link=$(curl -s -N http://127.0.0.1:4040/api/tunnels|sed 's#"# #g'|sed 's#http#\nhttp#g'|sed 's#.io#.io\n#g'|grep https|head -n 1)
```
**With:**
```bash
link=$(curl -s -N http://127.0.0.1:4040/api/tunnels | grep -o "https://[0-9a-z]*\.ngrok.io")
```

<br>

## FEATURES:

| Name | Description |
| ------------- | ------------- |
| `Ip-GeoLocation`  | Geolocate target Ip Address |
| `GPS-Geolocation`  | Geolocate target approximate GPS Geolocation|

<br>

## <p align = center> STARGAZERS OVER TIME 


[![Stargazers over time](https://starchart.cc/Lucksi/Interceptor.svg)](https://starchart.cc/Lucksi/Interceptor)

<br>

## <p align= center>MADE WITH :heart: BY LUCKSI IN :it:</p>

## <p align = center>  ORIGINAL CREATOR: <a href = "https://github.com/Lucksi">LUCA GAROFALO (Lucksi)</a></p>


## <p align = center>LICENSE: GPL-3.0 License <br>COPYRIGHT: (C) 2021-2023 Lucksi 
