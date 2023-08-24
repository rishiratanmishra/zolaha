import React from 'react';
import AboutZolaha from '../../components/AboutZolaha/AboutZolaha';
import Hero from '../../components/HeroSection/Hero';
import Partner from '../../components/Partners/Partner';
import AboutImage from './../../images/store-fun.png'
import Ecom from './../../images/ecom.png'
import Business from './../../images/Projections.png'
import Portfolio from './../../images/portfolio.png'
import Happy from './../../images/HappyNew.png'
import Card from './../Services/Cards/Card'
import './home.css';
import animationData from './../../images/animation.json';
import { FiAward, FiBox } from 'react-icons/fi';
import { Link } from 'react-router-dom';
const Home = () => {
  
  return (
    
    <>
    <Hero
      title="Designing, Developing, & Delivering Digital Success"
      description="ZOLAHA is your go-to destination for high-quality digital services, including website development and digital products. Let us help you elevate your brand and achieve your online goals."
      btnText="Start a conversation"
        animationData={animationData}
        classNameLottie={'lottie_css'}
        urlLink={'https://api.whatsapp.com/send?phone=918736082960&text=Hiii%20!!%20%F0%9F%99%83'}
      />
          <div className='our-partners-homepage'>
        <h2>Our Partners</h2>
        <Partner className="our-partners-homepage-brands"/>
      </div>
    
      <AboutZolaha
      ClassNameabout_zolaha_section={"about-zolaha-section"}
        AboutImg={AboutImage}
        AboutZolahaImage="about-zolaha-img"
        CompanyName="About Zolaha"
        CompanyScene=" Get Ahead in the Online Era with Zolaha - Leading Digital Marketing Agency in India"
        CompanyDetails="Zolaha is a top digital marketing agency in India that specializes in delivering cutting-edge solutions to help businesses grow and succeed in the online world. With a team of skilled and experienced professionals, we offer a wide range of digital marketing services Web Design and Development, including SEO, PPC, social media marketing, content marketing, and more. We take a data-driven approach to create customized strategies that are tailored to your specific business goals and objectives. Whether you're a small business or a large enterprise, we have the expertise and resources to help you build a strong online presence, drive more traffic, and generate more leads and conversions. Contact us today to see how we can help you take your business to the next level."
        Checklist1="Results-oriented"
        Checklist2="Customized Solutions"
        Checklist3="Experienced Team"
        Checklist4="Innovative Approach"
        Checklist5="Transparent Reporting"
        Checklist6="Affordable"
        AboutBtnText="Know More"
        FaIcon={<FiBox/>}
        AboutBtnTextClassName={'button-header btn-about-zolaha'}
        urlAboutLink="/about"
      />

   {/* Service Section */}

      <div className="home-our-services-section">

      <div className="home-our-services">
        
        <h2>Some of our Services</h2>
        <Link to='/services'  > <button className='home-more-services thisisdarkmode'> View More</button></Link>
        </div>
        <div className='home-our-services-cards'>
        <Card
          image={Ecom}
          altText="E-commerce Management"
          businessLabel="Website Development & Design"
          businessPara="Zolaha offers professional e-commerce website development services that are tailored to your business needs and designed to drive sales."
          businessTitle="E-commerce"
          btText1="Learn More"
          btText2="Contact us"
        />

        <Card
          image={Portfolio}
          altText="E-commerce Management"
          businessLabel="Website Development & Design"
          businessTitle="Portfolio"
          businessPara="Showcase your story and achievements with our professional portfolio design and development services. Impress your audience and stand out from the competition."
          btText1="Learn More"
          btText2="Contact us"
        />

        <Card
          image={Business}
          altText="E-commerce Management"
          businessLabel="Website Development & Design"
          businessTitle="Business Website"
         businessPara="Discover how our business website development services can help you establish a powerful online presence and drive growth for your brand."
          btText1="Learn More"
          btText2="Contact us"
        />
        </div>
      </div>

         {/* Service Section */}


      <AboutZolaha
      ClassNameabout_zolaha_section={"about-zolaha-section who-we-are-section"}
        AboutImg={Happy}
        AboutZolahaImage="about-zolaha-img"
        CompanyName="Loved by Everyone"
        CompanyScene="Discover Why clients choose Zolaha for their Online Success - Trusted Digital Marketing Agency"
        CompanyDetails={"We understand that the digital world can be intimidating, but we're here to help you tackle any challenge. We offer a comprehensive range of digital marketing and web development services that are tailored to meet your unique needs and budget."}
       FaIcon={<FiAward/>}
        Checklist1="Competitive pricing"
        Checklist2="Proven track record"
        Checklist3="Communication and transparency"
        Checklist4="Experienced team"
        Checklist5="Tailored solutions"
        Checklist6=" Comprehensive range of services"
        AboutBtnText="Know More"
        AboutBtnTextClassName={'button-header btn-about-zolaha'}
        urlAboutLink="/about"

      />
    
    
    </>
  )
 
};

export default Home;
