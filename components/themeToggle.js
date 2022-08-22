import React, {useState, useEffect} from 'react'
import { Icon } from '@iconify/react';

const ThemeToggle = () => {
  const [checked, setChecked] = useState(false)
  const lightTheme = "light"
  const darkTheme = "dark"
  let theme
  if (typeof window !== 'undefined') {
    theme = localStorage.getItem("theme")
  }
  
  useEffect(() => {
    if (theme === lightTheme || theme === darkTheme) {
      document.documentElement.classList.add(theme)
    } else {
      document.documentElement.classList.add(lightTheme)
    }
  }, [checked])
  
  const handleChange = () => {
    if (theme === darkTheme) {
      document.documentElement.classList.replace(darkTheme, lightTheme)
      localStorage.setItem("theme", "light")
      theme = lightTheme
      setChecked(false)
    } else {
      document.documentElement.classList.replace(lightTheme, darkTheme)
      localStorage.setItem("theme", 'dark')
      setChecked(true)
    }
  }
  return(
    <>
      <div className='flex items-center text-5xl mr-2 focus:outline-none text-white' onClick={handleChange}>
        {theme === "dark" 
          ? <Icon icon="fluent-emoji:new-moon-face" />
          : <Icon icon="fluent-emoji:sun-with-face" />
        }
      </div>
    </>
  )
}

export default ThemeToggle