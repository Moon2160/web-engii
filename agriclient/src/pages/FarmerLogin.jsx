import React from "react";
import { Container, Form, Button } from "react-bootstrap";

export default function FarmerLogin() {
  return (
    <Container className="mt-5">
      <h2 className="text-center fw-bold text-success">Farmer Login</h2>
      <Form className="p-4 shadow-lg rounded bg-light">
        <Form.Group className="mb-3">
          <Form.Label>Phone Number</Form.Label>
          <Form.Control type="tel" placeholder="Enter your phone number" />
        </Form.Group>

        <Form.Group className="mb-3">
          <Form.Label>Password</Form.Label>
          <Form.Control type="password" placeholder="Enter your password" />
        </Form.Group>

        <Button variant="success" className="w-100">Login</Button>
      </Form>
    </Container>
  );
}