import React from 'react'
import { Icon } from '@iconify/react';

const footer = () => {
  return (
    <div className="bg-secondary">
      <div className="container mx-auto py-5 text-center sm:text-left">
        <p className="text-lighten">Made with ♥ by Hendrie Ramdhani</p>
        <div className="flex text-primary gap-3 mt-2 justify-center sm:justify-start">
          <a href="https://www.github.com/ramdhanihendrie/" target="_blank">
            <Icon icon="akar-icons:github-fill" width={36}/>
          </a>
          <a href="https://www.linkedin.com/in/hendrieramdhani/" target="_blank">
            <Icon icon="akar-icons:linkedin-box-fill" width={36}/>
          </a>
          <a href="https://www.instagram.com/ramdhanihendrie/" target="_blank">
            <Icon icon="akar-icons:instagram-fill" width={36}/>
          </a>
          <a href="https://www.twitter.com/ramdhanihendrie/" target="_blank">
            <Icon icon="akar-icons:twitter-fill" width={36}/>
          </a>
        </div>
      </div>
    </div>
  )
}

export default footer