import React, { useState } from 'react';
import { Link } from 'react-router-dom';
import './navbar.css';
import DarkMode from './../DarkMode/Dark';
import { FaBars,FaTimes } from "react-icons/fa";
import zolaha from './../../images/zolaha.png'

const Navbar = () => {
  const [isMobile, setIsMobile] = useState(false);

  const handleClick = () => {
    setIsMobile(!isMobile);
  };

  return (
    <nav className='main-navbar'>
      <div className='left-navbar'>
        <Link to='/'>
          <img className='company-logo'  src={zolaha}  alt='logo'/>
             </Link>
      </div>
      <div className='hamburger-menu'>
      <FaBars className='ham-icon' onClick={handleClick} style={{ display: isMobile ? 'none' : 'block' }} />
      <FaTimes className='ham-icon' onClick={handleClick} style={{ display: isMobile ? 'block' : 'none' }} />
            </div>
      <div className={isMobile ? 'middle-navbar active' : 'middle-navbar'}>
        <ul className='middle-navbar-list'>
          <li className='link-item'>
            <Link to='/' className='link'>
              Home
            </Link>
          </li>
          <li className='link-item'>
            <Link to='/about' className='link'>
              About
            </Link>
          </li>
          <li className='link-item'>
            <Link to='/services' className='link'>
              Services
            </Link>
          </li>
          <li className='link-item'>
            <Link to='/contact' className='link'>
              Contact
            </Link>
          </li>
                  <div className='right-navbar'>
                  <DarkMode/>
                </div>
        </ul>
      </div>
    </nav>
  );
};

export default Navbar;
