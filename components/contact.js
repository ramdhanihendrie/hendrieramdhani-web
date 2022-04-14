import React from 'react'
import emailjs from '@emailjs/browser'
import SocialMedia from './socialMedia'

const contact = () => {
  const sendEmail = (e) => {
    e.preventDefault();

    emailjs.sendForm(
      "service_td2u8fk", 
      "template_23x58j9", 
      e.target, 
      "5sIEMsNvnH6U0rJXB"
    ).then(res => {
      console.log(res);
    }).catch(err => {
      console.log(err);
    });

    e.target.reset();
  }
  return (
    <section id="contact" className="grid grid-cols-1 md:grid-cols-2 container mx-auto pt-20 pb-52">
      <div>
        <h3 className="text-primary font-semibold text-2xl">Connect with me:</h3>
        <p className="text-justify tracking-wide leading-7 mt-3">Satisfied with me? Please contact me</p>
        <div className="inline-block">
          <SocialMedia />
        </div>
      </div>
      <div>
        <h5 className="text-xl font-semibold mt-5 md:mt-0">Contact me, let’s make magic together</h5>
        <form onSubmit={sendEmail}>
          <input type="text" name="name" placeholder="Name :" className="rounded bg-lighten p-3 my-5 w-full lg:max-w-lg block" />
          <input type="email" name="email" placeholder="Email :" className="rounded bg-lighten p-3 my-5 w-full lg:max-w-lg block"/>
          <textarea name="message" rows="5" placeholder="Message :"  className="rounded bg-lighten p-3 my-5 w-full lg:max-w-lg block resize-none" />
          <input type="submit" value="Send" className="btn-primary px-14" />
        </form>
      </div>
    </section>
  )
}

export default contact