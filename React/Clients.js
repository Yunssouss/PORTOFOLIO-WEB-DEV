import React, { useState } from 'react';

function Clients() {
  const [clients, setClients] = useState(['شركة 1', 'شركة 2', 'شركة 3']);

  return (
    <section>
      <h3>العملاء ديالنا</h3>
      <ul>
        {clients.map((client, index) => (
          <li key={index}>{client}</li>
        ))}
      </ul>
    </section>
  );
}

export default Clients;