import React from 'react'
import { Icon } from '@iconify/react';

const techCard = (props) => {
  return (
    <div className="bg-primary p-5 text-center flex flex-col text-white justify-center">
      <div className="block mx-auto">
        <Icon icon={props.icon} height="100" />
      </div>
      <h5 className="mt-5 font-semibold">{props.title}</h5>
    </div>
  )
}

export default techCard