<!-- Tour 33 -->
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
            id: [9877398545],
            node: document.getElementById('product-component-7765fe3f552'),
            moneyFormat: '%24%7B%7Bamount%7D%7D',
            options: {
      "product": {
        "buttonDestination": "checkout",
        "variantId": "all",
        "width": "240px",
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
            "background-color": "#1b3365",
            "padding-left": "64px",
            "padding-right": "64px",
            ":hover": {
              "background-color": "#2e57ac"
            },
            "border-radius": "2px",
            ":focus": {
              "background-color": "#2e57ac"
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
            "background-color": "#1b3365",
            ":hover": {
              "background-color": "#2e57ac"
            },
            "border-radius": "2px",
            ":focus": {
              "background-color": "#2e57ac"
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
            "background-color": "#1b3365",
            "padding-left": "64px",
            "padding-right": "64px",
            ":hover": {
              "background-color": "#2e57ac"
            },
            "border-radius": "2px",
            ":focus": {
              "background-color": "#2e57ac"
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
          "compareAt": {
            "font-family": "Helvetica Neue, sans-serif",
            "font-weight": "normal"
          }
        }
      },
      "toggle": {
        "styles": {
          "toggle": {
            "background-color": "#1b3365",
            ":hover": {
              "background-color": "#2e57ac"
            },
            ":focus": {
              "background-color": "#2e57ac"
            },
            "font-weight": "normal"
          },
          "count": {
            "font-size": "16px"
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

    <!-- Tour -->
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
            id: [9877315089],
            node: document.getElementById('product-component-a0712e8fc7c'),
            moneyFormat: '%24%7B%7Bamount%7D%7D',
            options: {
      "product": {
        "buttonDestination": "checkout",
        "variantId": "all",
        "width": "240px",
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
            "background-color": "#1b3365",
            "padding-left": "64px",
            "padding-right": "64px",
            ":hover": {
              "background-color": "#2e57ac"
            },
            "border-radius": "2px",
            ":focus": {
              "background-color": "#2e57ac"
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
          "compareAt": {
            "font-size": "15px",
            "font-family": "Helvetica Neue, sans-serif",
            "font-weight": "normal"
          }
        }
      },
      "cart": {
        "contents": {
          "title": false,
          "button": true
        },
        "text": {
          "title": "Toronto Craft Coffee Tour",
          "button": "Checkout",
          "empty": "Your cart is empty."
        },
        "styles": {
          "button": {
            "background-color": "#1b3365",
            ":hover": {
              "background-color": "#2e57ac"
            },
            "border-radius": "2px",
            ":focus": {
              "background-color": "#2e57ac"
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
            "background-color": "#1b3365",
            "padding-left": "64px",
            "padding-right": "64px",
            ":hover": {
              "background-color": "#2e57ac"
            },
            "border-radius": "2px",
            ":focus": {
              "background-color": "#2e57ac"
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
          "compareAt": {
            "font-family": "Helvetica Neue, sans-serif",
            "font-weight": "normal"
          }
        }
      },
      "toggle": {
        "styles": {
          "toggle": {
            "background-color": "#1b3365",
            ":hover": {
              "background-color": "#2e57ac"
            },
            ":focus": {
              "background-color": "#2e57ac"
            },
            "font-weight": "normal"
          },
          "count": {
            "font-size": "16px"
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

    <!-- Tour 33 TRP -->
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
            id: [9877400273],
            node: document.getElementById('product-component-a2b1bef3c65'),
            moneyFormat: '%24%7B%7Bamount%7D%7D',
            options: {
      "product": {
        "buttonDestination": "checkout",
        "variantId": "all",
        "width": "240px",
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
            "background-color": "#1b3365",
            "padding-left": "64px",
            "padding-right": "64px",
            ":hover": {
              "background-color": "#2e57ac"
            },
            "border-radius": "2px",
            ":focus": {
              "background-color": "#2e57ac"
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
            "background-color": "#1b3365",
            ":hover": {
              "background-color": "#2e57ac"
            },
            "border-radius": "2px",
            ":focus": {
              "background-color": "#2e57ac"
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
            "background-color": "#1b3365",
            "padding-left": "64px",
            "padding-right": "64px",
            ":hover": {
              "background-color": "#2e57ac"
            },
            "border-radius": "2px",
            ":focus": {
              "background-color": "#2e57ac"
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
          "compareAt": {
            "font-family": "Helvetica Neue, sans-serif",
            "font-weight": "normal"
          }
        }
      },
      "toggle": {
        "styles": {
          "toggle": {
            "background-color": "#1b3365",
            ":hover": {
              "background-color": "#2e57ac"
            },
            ":focus": {
              "background-color": "#2e57ac"
            },
            "font-weight": "normal"
          },
          "count": {
            "font-size": "16px"
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