import React from 'react'
import Image from 'next/image'
import heroImage from '../public/me.png'

const hero = () => {
  return (
    <section id="hero" className="container mx-auto flex flex-col sm:flex-row-reverse justify-center sm:justify-around py-10 text-center sm:text-left items-center">
      <div>
        <Image src={heroImage} alt="Picture of the author"  />
      </div>
      <div className="mt-5 sm:mt-0">
        <h2 className="text-3xl font-semibold">Hello, I'm</h2>
        <h1 className="text-5xl font-semibold">Hendrie Ramdhani</h1>
        <p className="py-6">Web Developer</p>
        <a 
          className="btn-primary" 
          href="/files/Web Developer-Hendrie Ramdhani-resume.pdf" 
          download
        >
          Download CV
        </a>
      </div>
    </section>
  )
}

export default hero