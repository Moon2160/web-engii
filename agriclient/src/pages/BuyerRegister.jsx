import React from "react";
import { Container, Form, Button } from "react-bootstrap";

export default function BuyerRegister() {
  return (
    <Container className="mt-5">
      <h2 className="text-center fw-bold text-primary">Buyer Registration</h2>
      <Form className="p-4 shadow-lg rounded bg-light">
        <Form.Group className="mb-3">
          <Form.Label>Full Name</Form.Label>
          <Form.Control type="text" placeholder="Enter your name" />
        </Form.Group>

        <Form.Group className="mb-3">
          <Form.Label>Email Address</Form.Label>
          <Form.Control type="email" placeholder="Enter your email" />
        </Form.Group>

        <Form.Group className="mb-3">
          <Form.Label>Password</Form.Label>
          <Form.Control type="password" placeholder="Enter your password" />
        </Form.Group>

        <Button variant="primary" className="w-100">Register</Button>
      </Form>
    </Container>
  );
}