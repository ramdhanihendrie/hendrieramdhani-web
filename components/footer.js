import React from 'react'
import SocialMedia from '../components/socialMedia';

const footer = () => {
  return (
    <div className="bg-secondary">
      <div className="container mx-auto py-5 text-center sm:text-left">
        <p className="text-tertiary">Made with ♥ by Hendrie Ramdhani</p>
        <SocialMedia />
      </div>
    </div>
  )
}

export default footer