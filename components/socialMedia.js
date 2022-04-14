import React from 'react'
import { Icon } from '@iconify/react';

const socialMedia = () => {
  return (
    <div className="grid grid-flow-col text-primary gap-3 mt-2 justify-center sm:justify-start">
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
  )
}

export default socialMedia