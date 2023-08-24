import React from 'react';
import './hero.css';
import Lottie from 'lottie-react';
import { Link } from 'react-router-dom';
import { FaWhatsapp } from 'react-icons/fa'



const Hero = (
  
  { title, description, btnText, heroImg, heroAlt, animationData, classNameLottie, urlLink }) => {
  return (
    <>
      <div className="hero-section">
        <div className="left-hero-section">
          <div className="left-hero-section-content">
            <h2>
              
{title}            </h2>
            
            <p>{description}</p>
          <Link to={urlLink} target='_blank' className='send-message' > <button className="button-header"><FaWhatsapp className='whatsapp-icon'/> {btnText}</button></Link>
          </div>
        </div>
        <div className="right-hero-section">
          <div className="right-hero-section-content">
            <img src={heroImg} alt={heroAlt} /> 
            <Lottie
              className={classNameLottie}
            animationData={animationData}
            loop={true}
            autoplay={true}
            controls={true}
          />  
          </div>
        </div>
      </div>
    </>
  );
};

export default Hero;
