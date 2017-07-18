<div id='product-component-d6c258097c1'></div>
<script type="text/javascript">
/*<![CDATA[*/

(function () {
  var scriptURL = 'https://sdks.shopifycdn.com/buy-button/latest/buy-button-storefront.min.js';
  if (window.ShopifyBuy) {
    if (window.ShopifyBuy.UI) {
      ShopifyBuyInit();
    } else {
      loadScript();
    }
  } else {
    loadScript();
  }

  function loadScript() {
    var script = document.createElement('script');
    script.async = true;
    script.src = scriptURL;
    (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(script);
    script.onload = ShopifyBuyInit;
  }

  function ShopifyBuyInit() {
    var client = ShopifyBuy.buildClient({
      domain: 'theroasterspack.myshopify.com',
      apiKey: '22746cf15b06a3918a989c58140bab93',
      appId: '6',
    });

    ShopifyBuy.UI.onReady(client).then(function (ui) {
      ui.createComponent('product', {
        id: [4163437380],
        node: document.getElementById('product-component-d6c258097c1'),
        moneyFormat: '%24%7B%7Bamount%7D%7D',
        options: {
  "product": {
    "buttonDestination": "checkout",
    "variantId": "all",
    "width": "100%",
    "contents": {
      "img": false,
      "imgWithCarousel": false,
      "title": false,
      "variantTitle": false,
      "price": false,
      "description": false,
      "buttonWithQuantity": false,
      "quantity": false
    },
    "text": {
      "button": "BUY NOW"
    },
    "styles": {
      "product": {
        "@media (min-width: 601px)": {
          "max-width": "100%",
          "margin-left": "0",
          "margin-bottom": "50px"
        }
      },
      "button": {
        "background-color": "#dd390d",
        "font-size": "15px",
        "padding-top": "15.5px",
        "padding-bottom": "15.5px",
        "padding-left": "64px",
        "padding-right": "64px",
        ":hover": {
          "background-color": "#c7330c"
        },
        "border-radius": "2px",
        ":focus": {
          "background-color": "#c7330c"
        },
        "font-weight": "normal"
      },
      "variantTitle": {
        "font-weight": "normal"
      },
      "title": {
        "font-size": "26px"
      },
      "description": {
        "font-weight": "normal"
      },
      "price": {
        "font-size": "18px",
        "font-weight": "normal"
      },
      "quantityInput": {
        "font-size": "15px",
        "padding-top": "15.5px",
        "padding-bottom": "15.5px"
      },
      "compareAt": {
        "font-size": "15px",
        "font-family": "Helvetica Neue, sans-serif",
        "font-weight": "normal"
      }
    }
  },
  "cart": {
    "contents": {
      "button": true
    },
    "text": {
      "button": "Checkout",
      "empty": "Your cart is empty. Click one of those orange buttons and get Dad something sweet!"
    },
    "styles": {
      "button": {
        "background-color": "#dd390d",
        "font-size": "15px",
        "padding-top": "15.5px",
        "padding-bottom": "15.5px",
        ":hover": {
          "background-color": "#c7330c"
        },
        "border-radius": "2px",
        ":focus": {
          "background-color": "#c7330c"
        },
        "font-weight": "normal"
      },
      "footer": {
        "background-color": "#ffffff"
      }
    }
  },
  "modalProduct": {
    "contents": {
      "img": false,
      "imgWithCarousel": true,
      "variantTitle": false,
      "buttonWithQuantity": false,
      "quantity": false
    },
    "styles": {
      "product": {
        "@media (min-width: 601px)": {
          "max-width": "100%",
          "margin-left": "0px",
          "margin-bottom": "0px"
        }
      },
      "button": {
        "background-color": "#dd390d",
        "font-size": "15px",
        "padding-top": "15.5px",
        "padding-bottom": "15.5px",
        "padding-left": "64px",
        "padding-right": "64px",
        ":hover": {
          "background-color": "#c7330c"
        },
        "border-radius": "2px",
        ":focus": {
          "background-color": "#c7330c"
        },
        "font-weight": "normal"
      },
      "variantTitle": {
        "font-weight": "normal"
      },
      "description": {
        "font-weight": "normal"
      },
      "price": {
        "font-weight": "normal"
      },
      "quantityInput": {
        "font-size": "15px",
        "padding-top": "15.5px",
        "padding-bottom": "15.5px"
      },
      "compareAt": {
        "font-family": "Helvetica Neue, sans-serif",
        "font-weight": "normal"
      }
    }
  },
  "toggle": {
    "styles": {
      "toggle": {
        "background-color": "#dd390d",
        ":hover": {
          "background-color": "#c7330c"
        },
        ":focus": {
          "background-color": "#c7330c"
        },
        "font-weight": "normal"
      },
      "count": {
        "font-size": "15px"
      }
    }
  },
  "productSet": {
    "styles": {
      "products": {
        "@media (min-width: 601px)": {
          "margin-left": "-20px"
        }
      }
    }
  }
}
      });
    });
  }
})();
/*]]>*/
</script>