<!DOCTYPE html>
<html>
<head><meta http-equiv="refresh" content="50" /></head>
<body style="margin:0;max-width:300px;max-height:250px">
<script async src="https://yastatic.net/pcode/adfox/header-bidding.js"></script>
<script type="text/javascript">
var adfoxBiddersMap = {
    "betweenDigital": "1461002",
	"otm": "1563293",
	"mytarget": "1461001",
	"RTBHouse": "1567641",
	"GetIntent": "1567638",
	"sape": "1703802",
					"Relap": "1922921",
	"alfasense": "1461004",
};

var adUnits = [
	{
        "code": "adfox_16025101513603530",
        "bids": [
            {
                "bidder": "betweenDigital",
                "params": {
                    "placementId": "4717398"
                }
            },
			{
                "bidder": "mytarget",
                "params": {
                    "placementId": "1436329"
                }
            },
			{
                "bidder": "GetIntent",
                "params": {
                    "placementId": "66_300x250_alfadart"
                }
            },
			{
                "bidder": "sape",
                "params": {
                    "placementId": "866357"
                }
            },
															{
                "bidder": "Relap",
                "params": {
                    "placementId": "B-rq0NobsEuxIiIi"
                }
            },
			{
                "bidder": "alfasense",
                "params": {
                    "placementId": "570"
                }
            },
        ],
        "sizes": [
            [
                300,
                250
            ]
        ]
    }
];
var userTimeout = 500;

  var syncPixels = [
    {
      bidder: 'sape',
      pixels: [
        'https://acint.net/cmatch/?dp=14&pi=1631743'
      ]
    }
  ];

window.YaHeaderBiddingSettings = {
    biddersMap: adfoxBiddersMap,
    adUnits: adUnits,
    timeout: userTimeout,
	syncPixels: syncPixels
};
</script>
<script>window.yaContextCb = window.yaContextCb || []</script>
<script src="https://yandex.ru/ads/system/context.js" async></script>

<div id="adfox_16025101513603530"></div>
<script>
	window.yaContextCb.push(()=>{
	Ya.adfoxCode.create({
        ownerId: 356132,
        containerId: 'adfox_16025101513603530',
        params: {
            pp: 'bext',
            ps: 'ekgo',
            p2: 'gyyr'
        },
	})
    });
setInterval(function(){ 
            window.Ya.adfoxCode.reload('adfox_16025101513603530')
}, 60000);
</script>
</body>
</html>