"use strict";(self.webpackChunkwebpackWcBlocksCartCheckoutFrontendJsonp=self.webpackChunkwebpackWcBlocksCartCheckoutFrontendJsonp||[]).push([[5806],{1342:(e,t,s)=>{s.d(t,{A:()=>n});var i=s(7723);const n=({defaultTitle:e=(0,i.__)("Step","woocommerce"),defaultDescription:t=(0,i.__)("Step description text.","woocommerce"),defaultShowStepNumber:s=!0})=>({title:{type:"string",default:e},description:{type:"string",default:t},showStepNumber:{type:"boolean",default:s}})},3243:(e,t,s)=>{s.r(t),s.d(t,{default:()=>A});var i=s(1609),n=s(851),o=s(1616),r=s(4656),c=s(1019),a=s(7143),l=s(7594),p=s(3588),d=s(7723),m=s(5606),u=s(8867),h=s(7874),g=s(3835),_=s(3643),w=s(910),b=s(1759),f=s(8755),E=s(8537),S=s(5703),k=s(4090),y=s(6087);const C=e=>{const t=(0,S.getSetting)("displayCartPricesIncludingTax",!1)?parseInt(e.price,10)+parseInt(e.taxes,10):parseInt(e.price,10),s=0===t?(0,i.createElement)("span",{className:"wc-block-checkout__shipping-option--free"},(0,d.__)("Free","woocommerce")):(0,i.createElement)(r.FormattedMonetaryAmount,{currency:(0,w.getCurrencyFromPriceResponse)(e),value:t});return{label:(0,E.decodeEntities)(e.name),value:e.rate_id,description:(0,E.decodeEntities)(e.description),secondaryLabel:s,secondaryDescription:(0,E.decodeEntities)(e.delivery_time)}},N=()=>(0,i.createElement)("p",{role:"status","aria-live":"polite",className:"wc-block-components-shipping-rates-control__no-shipping-address-message"},(0,d.__)("Enter a shipping address to view shipping options.","woocommerce")),v=({noShippingPlaceholder:e=null})=>{const{isEditor:t}=(0,b.m)(),{shippingRates:s,needsShipping:n,isLoadingRates:o,hasCalculatedShipping:c,isCollectable:a}=(0,m.m)(),{shippingAddress:l}=(0,u.q)(),p=(0,y.useMemo)((()=>a?s.map((e=>({...e,shipping_rates:e.shipping_rates.filter((e=>!(0,g.jV)(e.method_id)))}))):s),[s,a]);if(!n)return null;const w=(0,g.T4)(s);if(!c&&!w)return(0,i.createElement)(N,null);const E=(0,_.KY)(l);return(0,i.createElement)(i.Fragment,null,(0,i.createElement)(r.StoreNoticesContainer,{context:f.tG.SHIPPING_METHODS}),t&&!w?e:(0,i.createElement)(h.A,{noResultsMessage:(0,i.createElement)(i.Fragment,null,E?(0,i.createElement)(k.A,{isDismissible:!1,className:"wc-block-components-shipping-rates-control__no-results-notice",status:"warning"},(0,d.__)("No shipping options are available for this address. Please verify the address is correct or try a different address.","woocommerce")):(0,i.createElement)(N,null)),renderOption:C,collapsible:!1,shippingRates:p,isLoadingRates:o,context:"woocommerce/checkout"}))},F={...(0,s(1342).A)({defaultTitle:(0,d.__)("Shipping options","woocommerce"),defaultDescription:""}),className:{type:"string",default:""},lock:{type:"object",default:{move:!0,remove:!0}}},A=(0,o.withFilteredAttributes)(F)((({title:e,description:t,children:s,className:o})=>{const{showFormStepNumbers:d}=(0,p.O)(),m=(0,a.useSelect)((e=>e(l.CHECKOUT_STORE_KEY).isProcessing())),{showShippingMethods:u}=(0,c.C)();return u?(0,i.createElement)(r.FormStep,{id:"shipping-option",disabled:m,className:(0,n.A)("wc-block-checkout__shipping-option",o),title:e,description:t,showStepNumber:d},(0,i.createElement)(v,null),s):null}))}}]);