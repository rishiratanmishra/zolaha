import React from 'react'
import './partner.css'
import Meta from './BrandImages/meta.webp'
import Amazon from './BrandImages/amazon-ads.webp'
import Hostinger from './BrandImages/hostinger.png'
import Shopify from './BrandImages/shopify.webp'
import GoogleAds from './BrandImages/google-ads.png'

const Partner = () => {
    return (
      
        <>
            <div className="brand-partners">
                <img src={Meta } alt="brand-partners" />
                <img src={Amazon} alt="brand-partners"/>
                <img src={Hostinger} alt="brand-partners"/>
                <img src={Shopify} alt="brand-partners"/>
                <img src={GoogleAds} alt="brand-partners"/>
            </div>
        
        </>
  )
}

export default Partner