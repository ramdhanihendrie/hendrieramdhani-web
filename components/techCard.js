import React from 'react'
import { Icon } from '@iconify/react';

const techCard = (props) => {
  return (
    <div className="bg-primary p-5 text-center flex flex-col justify-center">
      <div className="block mx-auto">
        <Icon icon={props.icon} color="white" height="100" />
      </div>
      <h5 className="mt-5 font-semibold">{props.title}</h5>
    </div>
  )
}

export default techCard